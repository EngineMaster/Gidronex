@extends('includes.head')
@section('title','category')
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
<div class="container_category">
    @include('includes.header')
</div>
@isset($category)
<div class="category_description">
    <div class="feedback">
        <a href="/contact"><span class="material-icons">
local_offer
</span> Узнать Цену</a>
        <a href="/contact"><span class="material-icons">
thumb_up_alt
</span>  Оставить заявку</a>
    </div>
    <hr>
    <div class="category_description_wrapper">
        <div class="name_category">
            <h1>{{$category->name}}</h1>
        </div>
            <div class="category_desctiption_p">
                <p>
                {{$category->description}}
                </p>

            </div>
    </div>
</div>
<div class="cards_container">
        @isset($sections)
        @foreach($sections as $prod)
            @include('products.card-of-product',compact('prod'))
        @endforeach
            @endisset
            @endisset
</div>
    </body>
@endsection
