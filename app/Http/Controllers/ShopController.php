<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\CategoryProduct;
use App\Models\Posts;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\HttpFoundation\Cookie;

class ShopController extends Controller
{
    public function main(){
        if (!isset($_COOKIE['sessionIds'])){setcookie('sessionIds',uniqid());}
        $orderId = $_COOKIE['sessionIds'];
        if (is_null($orderId)){
            return view('contact');
        }
        return view('mainPage');
    }

    public function contact(Request $request){
        return view('contact');
    }

    public function contactConfirm(Request $request){
        $validate = $request->validate(
            [
                'name'=>'required|min:2|max:255',
                'phone'=>'required|max:255',
                'email'=>'required|max:40',
            ]
        );

        $insert = array([
            'name'=>$request->input('name'),
            'phone'=>$request->input('phone'),
            'email'=>$request->input('email'),
            'city'=>$request->input('city'),
            'commentary'=>$request->input('commentary'),
            'social_networking'=>$request->input('social_networking'),
        ]);
        $insertion = DB::table('clients_feedback')->insert($insert);
         return redirect()->back()->with('message','success');
        dd($insertion);

        Mail::send('mail', array('key' => 'value'), function($message)
        {
            $message->to('gidronexservice@gmail.com', 'Джон Смит')->subject('Привет!');
        });

        redirect()->back()->with('message','success');
}


    public function index(){
        $products = Product::get();
        return view('index',compact('products'));
    }

    public function categories(){
        if (!isset($_COOKIE['sessionIds'])) {setcookie('sessionIds',uniqid());}
        $orderId = $_COOKIE['sessionIds'];
        $categories = Category::get();
        return view('categories', compact('categories'));
    }

    public function category($id){
        $category = Category::where('id',$id)->first();
        $products = Product::where('category_id',$category->id)->orderBy('price');
        return view('category.category', compact('category', 'products'));
    }
    

    public function product($category, $product = null){
        $product = Product::where('name',$product)->first();
        return view('products.product',['product'=>$product]);
    }

    public function admin(){
        return view('admin');
    }

    public function posts(){
        $posts = DB::table('posts')->paginate(1);
        return view('posts',compact('posts'));
    }
    public function article($id){
            $post = Posts::where('id',$id)->first();
            return view('article', compact('post'));
    }

}
