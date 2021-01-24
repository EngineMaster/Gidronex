@include('.includes.head')
@include('includes.header')
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
</body>
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

