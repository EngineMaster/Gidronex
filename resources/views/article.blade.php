@include('includes.head')
@include('includes.header')
<div class="articles_cont">
    <p class="articles_cont_article"> Статьи </p>
</div>
<section class="article">
        <h1>{{$post->title}}</h1>
    <div class="article_container">
        <img src="{{$post->subtitle}}" alt="article_image" class="article_container_image" >
        <div class="article_container_text">
            <p class="article1">{{$post->article}}</p>
            <br><br>
            <p class="article2">{{$post->article2}}</p>
        </div>
    </div>
</section>

