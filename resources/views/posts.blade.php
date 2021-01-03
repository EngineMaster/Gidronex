@extends('includes.head')
@include('includes.header')
<section class="posts">
    @foreach($posts as $post)
        <div class="categories_wrapper_card">
            <img src="{{$post->title}}" alt="" class="categories_wrapper_card_image" >
            <div class="categories_wrapper_card_second_part">
                <div class="categories_wrapper_card_name">{{$post->subtitle}}, {{$post->article}}</div>
                <button class="btn_check_category"><a href="{{route('article',$post->id )}}">Смотреть</a></button>
            </div>
        </div>
    @endforeach
{!! $posts->links() !!}
</section>
