<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Cookie;
use Cart;

class BasketController extends Controller
{

    public function basket(){
        if (!isset($_COOKIE['sessionIds'])){ setcookie('sessionIds',uniqid());}
        $orderId = $_COOKIE['sessionIds'];

        \Cart::session($orderId);
        $items = \Cart::getContent();
        $total = Cart::session($orderId)->getTotal();
        return view('basket.basket', compact('items', 'total'));
    }
    public function basketPlace(){
        if (!isset($_COOKIE['sessionIds'])){ setcookie('sessionIds',uniqid());}
        $orderId = $_COOKIE['sessionIds'];
        $items = \Cart::getContent();
        $total = Cart::session($orderId)->getTotal();
        return view('basket.basket-confirm',compact('items','total'));

    }

    public function basketConmfirm(Request $request){
        if (!isset($_COOKIE['sessionIds'])){ setcookie('sessionIds',uniqid());}
        $orderId = $_COOKIE['sessionIds'];
        $items = \Cart::getContent();
        $total = Cart::session($orderId)->getTotal();
        $validate = $request->validate(
            [
                'name'=>'required|min:2|max:255',
                'phone'=>'required|max:255',
                'email'=>'required|max:40',
            ]
        );
        $items = \Cart::getContent();

        foreach($items as $row) {
            $string = ','.$row.',';;
        }
        $insert = array([
            'name'=>$request->input('name'),
            'phone'=>$request->input('phone'),
            'email'=>$request->input('email'),
            'all'=>$string,

        ]);
        $insertion = DB::table('orders_of_customers')->insert($insert);

        $end = \Cart::session($_COOKIE['sessionIds'])->clear();
        return redirect()->route('main');
    }

    public function basketAdd($product_id){
        if (!isset($_COOKIE['sessionIds'])){ setcookie('sessionIds',uniqid());}
        $orderId = $_COOKIE['sessionIds'];
        $product = Product::find($product_id);
        \Cart::session($orderId);
        \Cart::add(array(
            'id' => $product->id, // inique row ID
            'name' => $product->name,
            'price' => $product->price,
            'quantity' => $product->qty,
            'attributes' => array()
        ));
        $total = Cart::session($orderId)->getTotal();
        $items = (\Cart::getContent());
        //return redirect()->route('categories')->with('success_message','this product was added');
        return view('basket.basket', compact('items','total'))->with('success_message','this product was added');
    }


    public function basketDelete($product_id,Request $request){
        if (!isset($_COOKIE['sessionIds'])){ setcookie('sessionIds',uniqid());}
        $orderId = $_COOKIE['sessionIds'];
        \Cart::session($orderId);
        $product = Product::find($product_id);
        if($product->qty == 1){
            Cart::remove($product->id);
            $items = (\Cart::getContent());
            dd($items);
            $total = Cart::session($orderId)->getTotal();
            return view('basket.basket', compact('items','total'));
        }
        Cart::update($product->id, array(
            'quantity' => -1, // so if the current product has a quantity of 4, another 2 will be added so this will result to 6
        ));
        $total = Cart::session($orderId)->getTotal();
        $items = (\Cart::getContent());
        //return redirect()->route('categories')->with('success_message','this product was added');
        return view('basket.basket',compact('items', 'total'));

    }

}
