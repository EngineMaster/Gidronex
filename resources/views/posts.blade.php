@extends('includes.head')
@include('includes.header')
<section class="posts">
    <h1>Новости и Акции</h1>
    <hr>
    <div class="categories_wrapper_card">
    @foreach($posts as $post)
            <div class="categories_wrapper_card_second_part">
                <div class="categories_wrapper_card_name"><h5>{{$post->subtitle}}</h5> <p>{{$post->article}}</p></div>
                <div class="categories_wrapper_card_name">{{$post->created_at}}</div>
                <button class="btn_check_category"><a href="{{route('article',$post->id )}}">Смотреть</a></button>
            </div>

        </div>
    @endforeach
    <div class="pages">
        {!! $posts->links() !!}
    </div>
</section>
<script>
    window.onscroll = function() {myFunction()};

    // Get the header
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

