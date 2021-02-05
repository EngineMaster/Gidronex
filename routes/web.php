<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/sessionBegin', [\App\Http\Controllers\BasketController::class,'sessionBegin'])->name('sessionStart');
Route::get('/testing', [\App\Http\Controllers\ShopController::class,'test'])->name('test');
Route::get('/tests', [\App\Http\Controllers\ShopController::class,'testPost'])->name('testPost');
Route::get('/', [\App\Http\Controllers\ShopController::class,'main'])->name('main');
Route::get('/categories', [\App\Http\Controllers\ShopController::class,'categories'])->name('categories');
Route::get('/contact', [\App\Http\Controllers\ShopController::class,'contact'])->name('contact');
Route::post('/contact/confirm', [\App\Http\Controllers\ShopController::class,'contactConfirm'])->name('contact-confirm');
Route::get('/admin',[\App\Http\Controllers\ShopController::class,'admin'])->name('admin')->middleware('auth');
Route::get('/basket', [\App\Http\Controllers\BasketController::class,'basket'])->name('basket');
Route::get('/basket/place', [\App\Http\Controllers\BasketController::class,'basketPlace'])->name('basket-place');
Route::post('/basket/place/confirm', [\App\Http\Controllers\BasketController::class,'basketConmfirm'])->name('basket-confirm');
Route::post('/basket/add/{id}', [\App\Http\Controllers\BasketController::class,'basketAdd'])->name('basket-add');
Route::post('/basket/delete/{id}', [\App\Http\Controllers\BasketController::class,'basketDelete'])->name('basket-delete');
Route::post('/basket/remove/{id}', [\App\Http\Controllers\BasketController::class,'basketRemove'])->name('basket-remove');
Route::get('/search',[\App\Http\Controllers\SearchController::class,'search'])->name('search');
Route::get('/admin/insert',[\App\Http\Controllers\AdminController::class,'insert'])->name('admin-insert');
Route::get('/search/{id}',[\App\Http\Controllers\SearchController::class,'search'])->name('searching');
Route::get('/posts', [\App\Http\Controllers\ShopController::class,'posts'])->name('posts');
Route::get('/posts/{id?}', [\App\Http\Controllers\ShopController::class,'article'])->name('article');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['middleware' => ['role:admin']], function () {
    Route::get('/test', function(){
        return view('testview');
    });
    Route::get('/admin',[\App\Http\Controllers\AdminController::class,'admin'])->name('admin');
    Route::post('/admin/insert',[\App\Http\Controllers\AdminController::class,'adminInsert']);//admin Panel Insert
    Route::get('/admin/updateAndDelete',[\App\Http\Controllers\AdminController::class,'productsUpdate'])->name('productsUpdate');
    Route::post('/admin/updateAndDelete/{id}',[\App\Http\Controllers\AdminController::class,'productsUpdated'])->name('productsUpdateId');
    Route::post('/admin/delete/{id}',[\App\Http\Controllers\AdminController::class,'productsDelete'])->name('productsDelete');
    Route::get('/admin/posts',[\App\Http\Controllers\AdminController::class,'adminPosts'])->name('admin-posts');
    Route::post('/admin/posts/insert',[\App\Http\Controllers\AdminController::class,'postInsert'])->name('post-insert');
    Route::post('/admin/category/insert',[\App\Http\Controllers\AdminController::class,'categoryInsert'])->name('admin-insert-category');
    Route::get('/admin/clientrequests',[\App\Http\Controllers\AdminController::class,'clientsFeedback'])->name('clients');
});

Route::get('/{category}', [\App\Http\Controllers\ShopController::class,'category'])->name('category');
Route::get('/{category}/{section?}/', [\App\Http\Controllers\ShopController::class,'section'])->name('section');
Route::get('/{category}/{section}/{product?}', [\App\Http\Controllers\ShopController::class,'product'])->name('product');
