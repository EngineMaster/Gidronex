<?php

namespace App\Http\Controllers;

use App\Models\clientsFeedback;
use App\Models\Posts;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use mysql_xdevapi\Table;
use function PHPUnit\Framework\isEmpty;

class AdminController extends Controller
{

    public function admin(){
        $feedback = clientsFeedback::all()->count();
        $prods = Product::all()->count();
        $posts = Posts::all()->count();
        return view('admin.adminHome',compact('feedback','prods','posts'));
    }
    public function adminInsert(Request $request)
    {
        $insertProduct = array([
            'category_id' => $request->input('category_id'),
            'section_id' => $request->input('category_id'),
            'index' => $request->input('index'),
            'name' => $request->input('name'),
            'qty' => $request->input('qty'),
            'price' => $request->input('price'),

        ]);
        if (!empty($insertProduct)) {
            $insertion = DB::table('products')->insert($insertProduct);
            return redirect()->route('admin')->with('message_success', 'Товар добавлен');
        }
        if (empty($insertProduct==null)) {
            return redirect()->route('admin')->with('message_error', 'Ввод пуст');
        }
    }

    public function productsUpdate(){
        $prods = Product::all();
        return view('admin.productsActions.productsUpdate', compact('prods'));
    }

    public function productsUpdated(Request $request,$product_id){
        $insertProduct = [
            'index' => $request->input('index'),
            'name' => $request->input('name'),
            'qty' => $request->input('qty'),
            'price' => $request->input('price'),

        ];
        if (!empty($insertProduct)) {
            $product = Product::findOrFail($product_id);
            $insertion = DB::table('products')->where('id', $product->id)->update($insertProduct);
            return redirect()->route('productsUpdate');
        }
    }
    public function productsDelete($product_id)
    {
        $productDelete = Product::findOrFail($product_id)->delete();
        return redirect()->route('productsUpdate');
    }

    public function adminPosts(){
        $posts = Posts::all();
        return view('admin.posts.postInsert', compact('posts'));
    }

    public function postInsert(Request $request)
    {
        $insertProduct = array(
            'title' => $request->input('title'),
            'subtitle' => $request->input('subtitle'),
            'article' => $request->input('article'),
            'article2' => $request->input('article2'),
        );
        if (!empty($insertProduct)) {
            $insertion = DB::table('posts')->insert($insertProduct);
            return redirect()->route('admin-posts')->with('message_success', 'Пост Добавлен');
        }
        return view('admin.posts.postInsert', compact('posts'));
    }
        public function clientsFeedback(){
            $clients = clientsFeedback::all();
            return view('admin.clients', compact('clients'));
        }

        public function categoryInsert(Request $request){
            $insertProduct = array(
                'name' => $request->input('name'),
                'index' => $request->input('index'),
                'description' => $request->input('description'),
                'image' => $request->input('image'),
            );
            if (!empty($insertProduct)) {
                $insertion = DB::table('categories')->insert($insertProduct);
                return redirect()->route('admin')->with('message_success', 'Удачно');
            }


        }


}
