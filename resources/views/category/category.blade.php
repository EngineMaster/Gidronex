
@extends('includes.head')
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
        @foreach($category->sections as $prod)
            @include('products.card-of-product',compact('prod'))
        @endforeach
            @endisset
            @endisset
</div>

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
