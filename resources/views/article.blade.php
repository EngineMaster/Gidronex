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
</html>
