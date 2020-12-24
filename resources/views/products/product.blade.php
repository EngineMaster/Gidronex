@extends('includes.head')
@include('includes.header')

<div class="product_card">
     <div class="product_card_description">
        <h1>{{$product->name}}</h1>
            <p class="first_p">{{$product->description}}</p>
         <div class="option_and_buy">
            <p>{{$product->option}}</p>
            <button class="redir_to_contact"><a href="/contact">Узнать Цену</a></button>
         </div>
     </div>
    <div class="product_card_image">
        <img src="https://www.dksh.com/media/660/562/js305-1000.jpg" alt="product_image" class="product_image_product">
        <div class="d11"></div>
    </div>

</div>
