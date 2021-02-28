@include('includes.head')
@include('includes.header')

<section class="article">
        <h1>{{$post->title}}</h1>
    <div class="article_container">
        <img src="{{$post->subtitle}}" alt="" style="margin: 0 auto; display: flex;align-self: center;width: 50%" >
        <div class="article_container_text">
            <p class="article1">{{$post->article}}</p>
            <p class="article2">{{$post->article2}}</p>
        </div>
    </div>
</section>

