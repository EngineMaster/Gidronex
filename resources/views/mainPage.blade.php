<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=2.0, minimum-scale=0.5">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/app.css') }} " />

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
          rel="stylesheet">
    <link rel="icon" href="https://sun9-18.userapi.com/impf/RiMkyGKZdIn5OfxqSVgxHBrGWzlYgVUJLirXlQ/b9-b_ulFuXY.jpg?size=262x186&quality=96&proxy=1&sign=95fa93d31500b8c62fddb704fc595bf5&type=album">
    <title>ГидроНЭКС</title>
    <script src="https://maps.api.2gis.ru/2.0/loader.js?pkg=full"></script>
    <script src="https://api-maps.yandex.ru/2.1/?apikey=2780a154-acda-403e-9bd0-8c6b99873d7c&lang=ru_RU"
            type="text/javascript">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css">
</head>
<body>
<section class="container_mainpage">
   @include('includes.header')
    <div class="splide" >
        <div class="splide__track">
            <ul class="splide__list">
                <li class="splide__slide"><a href="{{route('categories')}}"><img src="https://images7.alphacoders.com/932/thumb-1920-932803.jpg" alt="" style=" width: 100%;object-fit: cover ;background-repeat: no-repeat;height: 35rem;background-position: center center"></a>  </li>
                <li class="splide__slide"><img src="https://sun9-43.userapi.com/impf/pZmQzeRNUx9EdGq37bPJ-BrhQo-itNDHkNRfpg/bMV8b_LYSBQ.jpg?size=1280x628&quality=96&sign=768d54c145a52325dd2681994ee9cc14" alt=""  style="object-fit: cover ;height: 35rem;background-repeat: no-repeat;background-position: center center"></li>
            </ul>
        </div>
    </div>
    <div class="black_banner">
    </div>
</section>

<section class="products_and_goods">
    <div class="container_with_choice">
        <h2>
            Большой ассортимент товара
        </h2>
        <p>
            Мы предоставляем огромный выбор запчастей и оборудования для отечественных экскаваторов и драглайнов
        </p>
        <button class="btn_shopping_details2"><a href="/categories">Запчасти</a></button>
        <button class="btn_shopping_details2"><a href="/categories">Оборудование</a></button>
    </div>
</section>

<section class="about_company">
    <div class="wrapping">
    <div class="text_container">
        <h3 class="about_us">О компании</h3>
        <p class="bolder">ООО ГидроНЭКС-Сервис - магазин комплектующих для отечественной техники.</p>
        <p>Мы успешно работаем на рынке с 2005 года. Наша компания предоставляет огромный выбор различных запчастей для отечественной техники.

            В нашем магазине вы легко сможете найти нужный вам товар, в наличии множество деталей и комплектующих.</p>
        <button class="btn_about_us"><a href="{{route('categories')}}">Подробнее</a></button>
    </div>
    <div class="image_container"><img src="https://stroytehnika.su/upload/iblock/1e6/1e659e1efe8cc188b65b36d58c6929d4.jpg" alt="" class="image_about_us"></div>
    </div>
</section>

<section class="assortment">
    <div class="content-wrapper">
            <img src="https://static.baza.drom.ru/drom/1482814825168_bulletin" alt="" class="image_of_assortment"/>
    <div class="text-containing-element">
        <h2 class="hydrotechnic">Гидробуры и гидромолоты</h2>
        <p class="paragraph">Наша компания предоставляет большой выбор гидробуров и гидромолотов для работ разной сложности и масштабов.</p>
        <button class="btn-assortment"><a href="{{route('categories')}}">Ассортимент</a></button>
    </div>
    </div>
</section>

<section class="goods_container">
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
                <li>
                    <div class="card"><img src="https://tri-kita.su/upload/iblock/14f/14fa6a4406556fd07d78ae2f40bf5352.jpg" alt="" class="card-image">
                        <div class="description">Запчасти на экскаваторы ЭО и ЕК</div>
                        <button class="btn_buy_product"><a href="/">Смотреть</a></button>
                    </div>
                </li>
                <li>
                    <div class="card"><img src="https://cdn1.leksakscity.se/2368/siku-liebherr-kabelkran-med-larvband-3536-1-50.jpg" alt="" class="card-image">
                        <div class="description">Запчасти на драглайны ЭО</div>
                        <button class="btn_buy_product"><a href="/">Смотреть</a></button>
                    </div>
                </li>
                <li>
                    <div class="card"><img src="https://images.esellerpro.com/2489/I/142/lrgscalePS-7010.jpg" alt="" class="card-image">
                        <div class="description">Фильтры</div>
                        <button class="btn_buy_product"><a href="/">Смотреть</a></button>
                    </div>
                </li>
                <li>
                    <div class="card"><img src="https://gear24.ru/wp-content/uploads/2020/04/SH11CR.jpg" alt="" class="card-image">
                        <div class="description">Гидромоторы, гидронасосы, гидроцилиндры</div>
                        <button class="btn_buy_product"><a href="/">Смотреть</a></button>
                    </div>
                </li>
                <li>
                    <div class="card"><img src="https://img.cataloxy.ru/upload/board/900/9276/gidromolot-delta-fx-30s_92754570.jpg" alt="" class="card-image">
                        <div class="description">Гидромолоты и гидробуры</div>
                        <button class="btn_buy_product"><a href="/">Смотреть</a></button>
                    </div>
                </li>
                <li>
                    <div class="card"><img src="https://s.alicdn.com/@sc01/kf/HTB1mLyoXKL2gK0jSZPhq6yhvXXa8/Fine-Quality-Floating-Oil-Seal-Used-for.jpg" alt="" class=" card-image">
                        <div class="description">Уплотнения для гидроцилиндров </div>
                        <button class="btn_buy_product"><a href="/">Смотреть</a></button>
                    </div>
                </li>
                <li>
                    <div class="card"><img src="https://gmgc.ru/wp-content/uploads/2018/02/DSC_0890_1-600x600.jpg" alt="" class="card-image">
                        <div class="description">Гидроаппаратура </div>
                        <button class="btn_buy_product"><a href="/">Смотреть</a></button>
                    </div>
                </li>
                <li>
                    <div class="card"><img src="https://spec-centr.ru/upload/iblock/3b2/3b2d54cab72a7579d6aef376949325c9.png" alt="" class="card-image">
                        <div class="description">Виброплиты и вибротромбовки</div>
                        <button class="btn_buy_product"><a href="/">Смотреть</a></button>
                    </div>
                </li>
            </ul>
        </div>
</section>

    <section class="content">
        <div class="text">
            <h2 class="vibrating_plates">Виброплиты и вибротромовки</h2>
            <p class="vibrating_plates_sub">На нашей витрине представлены вибротромбовки и виброплиты разных ценовых категорий и вы всегда сможете подобрать именно нужный вам инструмент.</p>
            <button class="btn-assortment"><a href=""> Ассортимент</a></button>
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
        <div class="first_row_card">
            <img src="https://media.istockphoto.com/photos/vibratory-plate-picture-id872652728?k=6&m=872652728&s=612x612&w=0&h=dcEwlo7Ce0_wATKLZxb51x7RMr6Lc7A8Nex87ALvyz0=" alt="" class="image_news">
            <p><a href="{{route('posts')}}">Статьи</a></p>
        </div>
    </div>
</section>

<section class="map-container">
    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A4bd09699954667873980eaa52811195248fb2431624d9348322a3b5084e2b5c6&amp;width=100%25&amp;height=600&amp;lang=ru_RU&amp;scroll=true"></script>
</section>

<section class="cookies">
@include('cookieConsent::index')
</section>
@include('includes.footer')
<script>
    window.onscroll = function() {myFunction()};

    //
    //  the header
    var header = document.querySelector('.navbar');

    // Get the offset position of the navbar
    var sticky = header.offsetTop;

    // Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
    function myFunction() {
        if (window.pageYOffset > sticky) {
            header.classList.add('sticky');
        } else {
            header.classList.remove('sticky');
        }
    }
</script>
<script>
    new Splide( '.splide', {
        type     : 'loop',
        focus    : 'center',
        direction: 'ttb',
        height   : '35rem',
        width : '100vw',
        heightRatio: 0.3,
        position : 'absolute',
        top : '0',
        autoWidth: true,
        rewind   : true,
        speed: 650,
        autoplay: true,
        interval: 2000,
        cover: true,
    } ).mount();
</script>
<script src="//code-ya.jivosite.com/widget/z9Rog8jtXf" async></script>


</body>
</html>
