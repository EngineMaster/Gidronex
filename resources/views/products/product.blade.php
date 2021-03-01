@extends('includes.head')
@section('title','product')
@section('content')
    <body>
    @include('includes.header')
<section class="product_card">
     <div class="product_card_description">
         <div>
        <h1>{{$product->name}}</h1>
            <p class="first_p">{{$product->description}} <br><br><br> @if($product->price == 0) Цена по Запросу  @else {{$product->price}} &#8381     @endif</p>
         </div>
         <div class="product_card_image">
             <img src="{{$product->image_product}}" alt="product_image" class="product_image_product">
             <div class="d11">
                 <!-- https://www.dksh.com/media/660/562/js305-1000.jpg -->

             </div>
         </div>
     </div>
</section>

         <section class="option_and_buy">
                 @isset($product->link)
                <ul style="list-style-type:none;">
                    <li><h4> Комплект поставки {{$product->name}} включает в себя</h4><br>{{$product->link}}</li>
                    <br>
                    <li><h4>Характеристики</h4><br>{{$product->link2}}</li>
                    <br>
                </ul>
                 @endisset
             <form action="{{route('basket-add', $product->id)}}" method="POST">
                 <button type="submit" class="submit_button">Заказать</button>
                 @csrf
             </form>
         </section>

<section class="call_me">
    <div class="call_me_contact">
            <span class="material-icons" style="font-size: 50px;padding: 20px">
                call_end
            </span>
               <p> +7 (922) 698-40-41 </p>
    </div>
        <p>Получить лучшую цену</p>
</section>

<section class="similar">
    <h5>ВАС МОЖЕТ ЗАИНТЕРЕСОВАТЬ</h5>
        <ul class="similar_products">
            @foreach($productsOther as $similiar)
                <li>
                    <div class="similar_products_card">
                        <img src="{{$similiar->image_product}}" alt="similar_products_card_image" style="width: 228px;height: 250px">
                        <a href="{{$similiar->id/$similiar->id/$similiar->name}}">{{$similiar->name}}</a>
                    </div>
                </li>
            @endforeach
        </ul>
</section>

    @if(session()->has('success_message'))
        <div class="success">
            <p class="cross_to_close">
            </p>
            <p>{{ session()->get('success_message') }}</p>
            <a href="{{route('basket')}}" ><button class="add_product_check">Перейти в корзину</button></a>
        </div>
        @endif

<script>
    document.querySelector('.cross_to_close').onclick = function () {
        let successMessage = document.querySelector('.success');
        successMessage.classList.add('hide');
    };
</script>
    </body>
@endsection
