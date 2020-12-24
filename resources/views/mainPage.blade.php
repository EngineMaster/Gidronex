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
    <title>Document</title>
    <script src="https://maps.api.2gis.ru/2.0/loader.js?pkg=full"></script>
    <script src="https://api-maps.yandex.ru/2.1/?apikey=2780a154-acda-403e-9bd0-8c6b99873d7c&lang=ru_RU"
            type="text/javascript">
    </script>
</head>
<body>

<div class="container_mainpage">
   @include('includes.header')
    <div class="black_banner">
        <div class="wrappy">
            <p>Мы откапываем легенды</p>
            <p class="little_text">Копайте глубже<span class="material-icons">arrow_right_alt</span></p>
        </div>
    </div>
</div>

<section class="products_and_goods">
    <div class="container_with_choice">
        <h2>
            Большой ассортимент товара
        </h2>
        <p>
            Мы предоставляем огромный выбор запчастей и оборудования для отечественных экскаваторов и драглайнов
        </p>
        <button class="btn_shopping_details2"><a href="/">Запчасти</a></button>
        <button class="btn_shopping_details2"><a href="/">Оборудование</a></button>
    </div>
</section>

<section class="about_company">
    <div class="wrapping">
    <div class="text_container">
        <h3 class="about_us">О компании</h3>
        <p class="bolder">ООО ГидроНЭКС-Сервис - магазин комплектующих для отечественной техники.</p>
        <p>Мы успешно работаем на рынке с 2005 года. Наша компания предоставляет огромный выбор различных запчастей для отечественной техники.

            В нашем магазине вы легко сможете найти нужный вам товар, в наличии множество деталей и комплектующих.</p>
        <button class="btn_about_us"><a href="/">Подробнее</a></button>
    </div>
    <div class="image_container"><img src="https://stroytehnika.su/upload/iblock/1e6/1e659e1efe8cc188b65b36d58c6929d4.jpg" alt="" class="image_about_us"></div>
    </div>
</section>

<section class="assortment">
    <div class="content-wrapper">
            <img src="https://static.baza.drom.ru/drom/1482814825168_bulletin" alt="" class="image_of_assortment"/>
    <div class="text-containing-element">
        <h2 class="hydrotechnic">Гидробуры и гидромолоты</h2>
        <p>Наша компания предоставляет большой выбор гидробуров и гидромолотов для работ разной сложности и масштабов.</p>
        <button class="btn-assortment"><a href="/">Ассортимент</a></button>
    </div>
    </div>
</section>

<section class="goods_container">
    <h3 class="full_assortment">Полный Ассортимент</h3>
        <div class="goods_wrapper">
            <hr>
            <ul>
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

<section class="advertise">
    <div class="content">
        <div class="text">
            <h2 class="advert">Виброплиты и вибротромовки</h2>
            <p class="second_paragraph">На нашей витрине представлены вибротромбовки и виброплиты разных ценовых категорий и вы всегда сможете подобрать именно нужный вам инструмент.</p>
            <button class="btn-assortment"><a href=""> Ассортимент</a></button>
        </div>
        <div class="image_container_advertisment">
            <img src="https://mdvgroup.pro/uploads/product/1300/1331/thumbs/70_vibroplita-impulse-vp60l-5.jpg" alt="" class="imagecont">
        </div>
        </div>
</section>

<section class="news">
    <div class="content-wrappy">
        <div class="content-wrapper-wrappy">
            <h2 class="advert">Новости и акции</h2>
            <ul>
                <li>
                    <div class="card"><img src="https://sun9-70.userapi.com/impf/SLlG_aMvtE9LZdxTeQx8CE8jakzChufNFUb4gA/icHNzIkvE-s.jpg?size=370x205&quality=96&proxy=1&sign=fa89fa82bccf70e5030f4cda5774ed1a" alt="" class="news_image">
                        <button class="btn_read_news"><span class="read">Читать</span></button>
                        <div class="new_info">Новость такая то такая то, описание</div>
                        <p>29 октября 2020г.</p>
                    </div>
                </li>
                <li>
                    <div class="card"><img src="https://sun9-32.userapi.com/impf/BEo9w6kfkFwB3n1lcXrewU4UwxpuXT9Wr_1Aaw/m5Nen-vBr8g.jpg?size=370x205&quality=96&proxy=1&sign=455921136ef55b296b39a7a6e5666654" alt="" class="news_image">
                        <button class="btn_read_news"><span class="read">Читать</span></button>
                        <div class="new_info">Новость такая то такая то, описание</div>
                        <p>29 октября 2020г.</p>
                    </div>
                </li>
                <li>
                    <div class="card"><img src="https://sun9-67.userapi.com/impf/FyZ_aYexbGWy6XzLB4l1TflEpW3WucZ8qYYrmA/hy-yiYl64tE.jpg?size=370x205&quality=96&proxy=1&sign=de757bab9beb8f25c0d40ca782c42127" alt="" class="news_image">
                        <button class="btn_read_news"><span class="read">Читать</span></button>
                        <div class="new_info">Новость такая то такая то, описание</div>
                        <p>29 октября 2020г.</p>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</section>

<section class="map-container">
    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A4bd09699954667873980eaa52811195248fb2431624d9348322a3b5084e2b5c6&amp;width=100%25&amp;height=600&amp;lang=ru_RU&amp;scroll=true"></script>
    <div id="contact_info">
            <form class="contact_info_wrapper">
                <div class="input">
                    <label for="check1">Имя<sup>*</sup></label>
                    <input type="text" id="check1" name="name">
                </div>
                <div class="input">
                    <label for="check1">Телефон<sup>*</sup></label>
                    <input type="text" id="check1" name="phone">
                </div>
                <div class="input">
                    <label for="check1">Email<sup>*</sup></label>
                    <input type="text" id="check1" name="email">
                </div>
                @csrf
                <button type="submit" class="btn_contact">Оставить заявку</button>
            </form>
        </div>
    </div>
</section>

@include('includes.footer')
</body>
</html>
