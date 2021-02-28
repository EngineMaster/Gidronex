@extends('includes.head')
@include('includes.header')
<section class="posts_container">
    <h1> <span class="material-icons">
dynamic_feed
</span>  Статьи, советы, рекомендации</h1>
    <div class="lines"></div>
    <div class="lines2"></div>

    <hr>
    @foreach($posts as $post)
        <div class="post_card">
            <img src="https://i.ibb.co/6P6GsQZ/Component-1.png" alt="" class="post_card_image">
            <div class="post_card_title">
                <p>
                    {{$post->title}}
                </p>
                <p class="post_card_subtitle">
                    {{$post->subtitle}}
                </p>
                <a href="{{route('article',[$post->title])}}">
                    Читать
                </a>
            </div>
        </div>
    @endforeach
</section>
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

