@extends('includes.head')
@section('title','Home')
@section('content')
<body onload=" myFunction()">

<div id="loader-42">

</div>
<div style="display:none;" id="myDiv" class="animate-bottom">

<section class="container_mainpage">
   @include('includes.header')

    <!--
    <div class="splide" >
        <div class="splide__track">
            <ul class="splide__list">
                <li class="splide__slide"><a href="{{route('categories')}}"><img src="https://images7.alphacoders.com/932/thumb-1920-932803.jpg" alt="" style=" width: 100%;object-fit: cover ;background-repeat: no-repeat;height: 35rem;background-position: center center"></a>  </li>
                <li class="splide__slide"><img src="https://sun9-43.userapi.com/impf/pZmQzeRNUx9EdGq37bPJ-BrhQo-itNDHkNRfpg/bMV8b_LYSBQ.jpg?size=1280x628&quality=96&sign=768d54c145a52325dd2681994ee9cc14" alt=""  style="object-fit: cover ;height: 35rem;background-repeat: no-repeat;background-position: center center"></li>
            </ul>
        </div>
    </div> -->

    <div class="black_banner ">
        <div class="wrappy">
            <h3>Надежность в каждой детали </h3>
            <p>
                <span class="wrappy_orange"> Gidronex </span> - Ваш лучший выбор
            </p>
        </div>
    </div>

</section>

<section class="products_and_goods " >
    <div class="container_with_choice">
        <h2>
            Большой ассортимент товара
        </h2>
        <p>
            Мы предоставляем огромный выбор запчастей и оборудования для отечественных экскаваторов и драглайнов
        </p>
        <button class="btn_shopping_details2"><a href="/1">Запчасти</a></button>
        <button class="btn_shopping_details2"><a href="/28">Оборудование</a></button>
    </div>
</section>

<section class="about_company " >
    <div class="wrapping">
    <div class="text_container">
        <h3 class="about_us">О компании</h3>
        <p class="bolder">ООО ГидроНЭКС-Сервис - магазин комплектующих для отечественной техники.</p>
        <p>Мы успешно работаем на рынке с 2005 года. Наша компания предоставляет огромный выбор различных запчастей для отечественной техники.

            В нашем магазине вы легко сможете найти нужный вам товар, в наличии множество деталей и комплектующих.</p>
        <button class="btn_about_us"><a href="/1">Подробнее</a></button>
    </div>
    <div class="image_container"><img src="https://stroytehnika.su/upload/iblock/1e6/1e659e1efe8cc188b65b36d58c6929d4.jpg" alt="" class="image_about_us"></div>
    </div>
</section>

<section class="assortment ">
    <div class="content-wrapper">
            <img src="https://static.baza.drom.ru/drom/1482814825168_bulletin" alt="" class="image_of_assortment"/>
    <div class="text-containing-element">
        <h2 class="hydrotechnic">Гидробуры и гидромолоты</h2>
        <p class="paragraph">Наша компания предоставляет большой выбор гидробуров и гидромолотов для работ разной сложности и масштабов.</p>
        <button class="btn-assortment"><a href="/2">Ассортимент</a></button>
    </div>
    </div>
</section>

<section class="goods_container " >
    <h3 class="full_assortment">Полный Ассортимент</h3>
        <div class="goods_wrapper">
            <hr>
            <ul>
                @foreach($categories as $category)
                <li>
                    <div class="card"><img src="{{$category->image}}" alt="" class="card-image">
                        <div class="description">{{$category->name}}</div>
                        <button class="btn_buy_product"><a href="{{route('category',[$category->id])}}">Смотреть</a></button>
                    </div>
                </li>
                @endforeach
</section>

    <section class="content">
        <div class="text">
            <h2 class="vibrating_plates">Виброплиты и вибротромовки</h2>
            <p class="vibrating_plates_sub">На нашей витрине представлены вибротромбовки и виброплиты разных ценовых категорий и вы всегда сможете подобрать именно нужный вам инструмент.</p>
            <button class="btn-assortment"><a href="/21"> Ассортимент</a></button>
        </div>
        <div class="image_container_advertisment">
            <img src="https://mdvgroup.pro/uploads/product/1300/1331/thumbs/70_vibroplita-impulse-vp60l-5.jpg" alt="" class="imagecont">
        </div>
    </section>


<section class="news">
    <div class="first_row">
        <div class="first_row_card">
            <img src="https://sun9-28.userapi.com/impf/5JapmwiFKg2RY5Mem6kJxYvk_NxE42PQfojogw/N2M3MZwubko.jpg?size=1000x799&quality=96&proxy=1&sign=fb9f8c68f41b4f188a4eb7371d443437&type=album" alt="excavator" class="image_news">
            <p><a href="{{route('posts')}}">Новости</a></p>
        </div>
        <!--<div class="first_row_card">
            <img src="https://media.istockphoto.com/photos/vibratory-plate-picture-id872652728?k=6&m=872652728&s=612x612&w=0&h=dcEwlo7Ce0_wATKLZxb51x7RMr6Lc7A8Nex87ALvyz0=" alt="" class="image_news">
            <p><a href="//route('posts')}}">Статьи</a></p>
        </div>-->
    </div>
</section>

<section class="map-container">
    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A4bd09699954667873980eaa52811195248fb2431624d9348322a3b5084e2b5c6&amp;width=100%25&amp;height=600&amp;lang=ru_RU&amp;scroll=true"></script>
</section>

<section class="cookies">
    @include('cookieConsent::index')
</section>
    @include('includes.footer')
</div>
    </body>

<script>
    window.onscroll = function() {myFunction2()};

    //
    //  the header
    var header = document.querySelector('.navbar');

    // Get the offset position of the navbar
    var sticky = header.offsetTop;

    // Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
    function myFunction2() {
        if (window.pageYOffset > sticky) {
            header.classList.add('sticky');
        } else {
            header.classList.remove('sticky');
        }
    }
</script>
<script>
    var myVar;

    function myFunction() {
        myVar = setTimeout(showPage,400);
    }

    function showPage() {
        document.getElementById("loader-42").style.display = "none";
        document.getElementById("myDiv").style.display = "block";


    }
</script>

<script src="//code-ya.jivosite.com/widget/z9Rog8jtXf" async></script>
@endsection
