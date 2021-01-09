<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Cookie;
use Cart;
use function PHPUnit\Framework\isEmpty;

class BasketController extends Controller
{

    public function sessionBegin(){
        if (!isset($_COOKIE['sessionIds'])){
            setcookie('sessionIds',uniqid());
        }
        $orderId = $_COOKIE['sessionIds'];
        return $orderId;
    }

    public function basket(){
        $orderId = $this->sessionBegin();
        \Cart::session($orderId);
        $products  = Product::all();
        $items = \Cart::getContent();
        $total = Cart::session($orderId)->getTotal();
        if (isEmpty($items)){

            return view('basket.basket', compact('items', 'total','products'));
        }
        return view('basket.basket', compact('items', 'total','products'));
    }

    public function basketPlace(){
        $orderId = $this->sessionBegin();
        $items = \Cart::getContent();
        $total = Cart::session($orderId)->getTotal();
        return view('basket.basket-confirm',compact('items','total'));

    }

    public function basketConmfirm(Request $request){
        $orderId = $this->sessionBegin();
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
        $orderId = $this->sessionBegin();
        $product = Product::find($product_id);
        \Cart::session($orderId);
        \Cart::add(array(
            'id' => $product->id, // inique row ID
            'name' => $product->name,
            'price' => $product->price,
            'quantity' => $product->qty,
            'attributes' => array()
        ));
        Cart::session($orderId)->getTotal();
        (\Cart::getContent());
        //return redirect()->route('categories')->with('success_message','this product was added');
        return redirect()->route('basket')->with('success_message','Продукт добавлен в корзину');
    }



    public function basketDelete($product_id,Request $request){
        $orderId = $this->sessionBegin();
        \Cart::session($orderId);
        $product = Product::find($product_id);
        if(!Cart::isEmpty()){
            Cart::update($product->id, array(
                'quantity' => -1, // so if the current product has a quantity of 4, another 2 will be added so this will result to 6
            ));
            return redirect()->route('basket');
        }
        //return redirect()->route('categories')->with('success_message','this product was added');
    }

    public function basketRemove($product_id){
        $orderId = $this->sessionBegin();
        \Cart::session($orderId);
        \Cart::remove($product_id);
        (\Cart::getContent());
        return redirect()->route('basket');
    }

}
