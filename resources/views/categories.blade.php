@extends('includes.head')
@section('title','Categories')
@section('content')
    @include('includes.header')
<body onload=" myFunction()">
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
