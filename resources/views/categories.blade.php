@extends('includes.head')
@section('title','Categories')
@section('content')
    @include('includes.header')
<body onload=" myFunction()">
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
        m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
    (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

    ym(75386056, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
    });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/75386056" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<div id="loader-42"></div>
<div style="display:none;" id="myDiv" class="animate-bottom">
    <section class="categories_wrapper">
            @foreach($categories as $category)
                <div class="categories_wrapper_card">
                    <img src="{{$category->image}}" alt="" class="categories_wrapper_card_image" >
                    <div class="categories_wrapper_card_second_part">
                            <div class="categories_wrapper_card_name">{{$category->name}}</div>
                        <button class="btn_check_category"><a href="{{route('category',$category->id )}}">Смотреть</a></button>
                    </div>
                </div>
        @endforeach

        @if(session()->has('success_message'))
            {{session()->get('success_message')}}
            @endif
    </section>
</div>

<script>
    var myVar;

    function myFunction() {
        myVar = setTimeout(showPage, 1200);
    }

    function showPage() {
        document.getElementById("myDiv").style.display = "block";
        document.getElementById("loader-42").style.display = "none";

    }
</script>
</body>
@endsection
