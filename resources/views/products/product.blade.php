@extends('includes.head')
@section('title','product')
@section('content')
    <body>
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
        (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
            m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(75386056, "init", {
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true,
            webvisor:true
        });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/75386056" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
        @include('includes.header')
        <div class="articles_cont2">
            <p class="articles_cont_article"> {{$product->category->name}}</p>
        </div>
            <section class="product_card">
                 <div class="product_card_description">
                     <div>
                    <h1>{{$product->name}}</h1>
                        <p class="first_p">{{$product->description}} <br><br><br> @if($product->price == 0) Цена по Запросу  @else {{$product->price}} &#8381     @endif</p>
                         @if($product->price > 16000 && $product->price <85000 )
                             <p class="second_p">Лидер продаж
                                 <span class="material-icons" style="font-size: 20px;margin-left: 5px">
                                     local_offer
                                </span>
                             </p>
                             @endif
                     </div>
                     <div class="product_card_image">
                         <img src="{{$product->image_product}}" alt="product_image" class="product_image_product">

                         <div class="d11">

                         </div>
                     </div>
                 </div>
            </section>

             <section class="option_and_buy">
                     @isset($product)
                    <ul style="list-style-type:none;">
                        <li><h4> Комплект поставки {{$product->name}} включает в себя</h4><br> -{{$product->link}}</li>
                        <br>
                        <li><h4>Характеристики</h4><br>{{$product->link2}}</li>
                        -
                        <br>
                        <ul class="tabled">
                                @if(($childProducts->count() > 0 ))
                                       <p> В наличии следующие продукты <br>
                                           {{$product->name}} :
                                       </p>
                                @endif
                                    @foreach($childProducts as $child)
                                <li class="tabled_prod">
                                    <p style="color: black;font-weight: 500">{{$child->name}}</p>
                                        <ol style="color:black">Цена : @if($child->price == 0) Цена по запросу @else {{$child->price}} ₽ @endif  </ol>
                                </li>
                                    @endforeach
                        </ul>
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
                                    <a href="{{route('product',[$similiar->id,$similiar->id,$similiar->name])}}">{{$similiar->name}}</a>
                                </div>
                            </li>
                        @endforeach
                    </ul>
            </section>

            @if(session()->has('success_message'))
                <div class="success">
                    <p class="cross_to_close">
                    </p>
                    <div class="success_wrap">
                        <ul class="success_wrap_category">
                            <p> Вам может быть интересно</p>
                            @foreach($clientsCategory as $clientCat)
                                <li><a href="{{route('category',[$clientCat->id])}}">{!! $clientCat->name !!}</a></li>
                            @endforeach
                        </ul>
                        <div class="success_wrap_buttons">

                            <p>
                                {{ session()->get('success_message') }}
                            </p>

                            <a href="{{route('basket')}}" >
                                <button class="add_product_check">
                                    Перейти в корзину
                                </button>
                            </a>

                        </div>
                    </div>
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
