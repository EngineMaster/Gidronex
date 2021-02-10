<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Posts;
use App\Models\Product;
use App\Models\ProductImages;
use App\Models\section;
use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\HttpFoundation\Cookie;
use function PHPUnit\Framework\isEmpty;
use function PHPUnit\Framework\isNull;
use Illuminate\Http\Client\Response;


class ShopController extends Controller
{

    public function main(){
        if(!isset($_COOKIE["sessionIds"])) {
            $cart_data = array();
            $item_data = json_encode($cart_data);
            setcookie("sessionIds", $item_data  , time() + (86400 * 30));
            $_COOKIE["sessionIds"] = $item_data;
        }
            $categories = Category::all();
            return view('mainPage',compact('categories'));
    }

    public function contact(Request $request){
        return view('contact');
    }

    public function test(Request $request){
        //{
            //$minutes = 20;
        //$response = new Response('Hello World');
        //$response->withCookie(cookie('sessionIds', 'virat', $minutes));
        //dd($response);
        //}
        $lg = (isset($_COOKIE['sessionIds'])) ? $_COOKIE['sessionIds'] : 'ro'; ;
        if(!isset($_COOKIE['sessionIds'])) {
            setcookie('sessionIds', 'ro');
            $value = stripslashes($_COOKIE['sessionIds']);
            return redirect()->with($value);
        }
        else{


    }
    }

    public function testPost(Request $request){
        $request->session()->regenerate();
        return redirect()->route('test');
    }

    public function contactConfirm(Request $request){
        $validate = $request->validate(
            [
                'name'=>'required|min:2|max:255',
                'phone'=>'required|min:8|max:255|unique:orders_of_customers,phone',
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
        DB::table('clients_feedback')->insert($insert);
         return redirect()->back()->with('message','success');
}


    public function index(){
        $products = Product::get();
        return view('index',compact('products'));
    }

    public function categories(){
        if (!isset($_COOKIE['sessionIds'])) {setcookie('sessionIds',uniqid());}
        $orderId = $_COOKIE['sessionIds'];
        $categories = Category::get();
        $sections = section::all();
        return view('categories', compact('categories','sections','orderId'));
    }

    public function category($id){
        $category = Category::where('id',$id)->first();
        $sections = section::where('category_id',$category->id);
        return view('category.category', compact('category', 'sections'));
    }

    public function section($id,$section_name){
        $category = Category::where('id',$id)->first();
        $sections = section::where('name',$section_name)->first();
        $items = \Cart::getContent();
        return view('section', compact('category', 'sections','items'));
    }


    public function product($category,$section, $product = null){
        $product = Product::where('name',$product)->first();
        return view('products.product',['product'=>$product]);
    }

    public function productList(){
        return Product::all();
    }

    public function admin(){
        return view('admin');
    }

    public function posts(){
        $posts = Posts::paginate(5);
        return view('posts',compact('posts'));
    }

    public function article($title){
            $post = Posts::where('title',$title)->first();
            return view('article', compact('post'));
    }

}
