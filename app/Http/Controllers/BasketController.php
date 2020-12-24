<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
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
        $end = \Cart::session($_COOKIE['sessionIds'])->clear();
        return(view('mainPage', compact('end')));
    }

    public function basketAdd($product_id,Request $request){
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
        if($product->qty === 1){
            Cart::remove($product->id);
            $items = (\Cart::getContent());
            return view('basket.basket', compact('items'));
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
