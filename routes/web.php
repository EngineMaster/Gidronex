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

Route::get('/', [\App\Http\Controllers\ShopController::class,'main'])->name('maib');
Route::get('/categories', [\App\Http\Controllers\ShopController::class,'categories'])->name('categories');
Route::get('/contact', [\App\Http\Controllers\ShopController::class,'contact'])->name('contact');
Route::post('/contact/confirm', [\App\Http\Controllers\ShopController::class,'contactConfirm'])->name('contact-confirm');
Route::get('/admin',[\App\Http\Controllers\ShopController::class,'admin'])->name('admin')->middleware('auth');
Route::get('/basket', [\App\Http\Controllers\BasketController::class,'basket'])->name('basket');
Route::get('/basket/place', [\App\Http\Controllers\BasketController::class,'basketPlace'])->name('basket-place');
Route::post('/basket/add/{id}', [\App\Http\Controllers\BasketController::class,'basketAdd'])->name('basket-add');
Route::post('/basket/delete/{id}', [\App\Http\Controllers\BasketController::class,'basketDelete'])->name('basket-delete');
Route::get('/search',[\App\Http\Controllers\SearchController::class,'search'])->name('search');
Route::get('/admin/insert',[\App\Http\Controllers\AdminController::class,'insert'])->name('admin-insert');
Route::get('/search/{id}',[\App\Http\Controllers\SearchController::class,'search'])->name('searching');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['middleware' => ['role:admin']], function () {
    Route::get('/test', function(){
        return view('testview');
    });
});
Route::get('/{category}', [\App\Http\Controllers\ShopController::class,'category'])->name('category');
Route::get('/{category}/{product?}', [\App\Http\Controllers\ShopController::class,'product'])->name('product');


