@include('includes.head')
@include('includes.header')

<section class="article">
        <h1>{{$post->title}}</h1>
    <div class="article_container">
        <img src="{{$post->subtitle}}" alt="article_image" style="margin: 0 auto; display: flex;align-self: center;width: 90%;border: 10px solid #fcba03;" >
        <div class="article_container_text">
            <p class="article1">{{$post->article}}</p>
            <br><br>
            <p class="article2">{{$post->article2}}</p>
        </div>
    </div>
</section>

