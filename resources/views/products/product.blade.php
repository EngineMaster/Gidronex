@extends('includes.head')
@include('includes.header')

<div class="product_card">
     <div class="product_card_description">
         <div>
        <h1>{{$product->name}}</h1>
            <p class="first_p">{{$product->description}}</p>
         </div>
         <div class="product_card_image">
             <img src="{{$product->image}}" alt="product_image" class="product_image_product">
             <div class="d11">
                 <!-- https://www.dksh.com/media/660/562/js305-1000.jpg -->

             </div>
         </div>
     </div></div>

         <div class="option_and_buy">
                 @isset($product->link)
                <ul>
                    <li>{{$product->link}}</li>
                    <br>
                    <li>{{$product->link2}}</li>
                    <br>
                    <li>{{$product->link3}}</li>
                </ul>
                 @endisset
             <form action="{{route('basket-add', $product->id)}}" method="POST">
                 <button type="submit" class="submit_button">Заказать</button>
                 @csrf
             </form>
         </div>
     </div>
    @if(session()->has('success_message'))
        <div class="success">
            <p class="cross_to_close">
            </p>
            <p>{{ session()->get('success_message') }}</p>
            <a href="{{route('basket')}}" ><button class="add_product_check">Перейти в корзину</button></a>
        </div>

    @endif
</div>
<script>
    document.querySelector('.cross_to_close').onclick = function () {
        let successMessage = document.querySelector('.success');
        successMessage.classList.add('hide');
    };
</script>
