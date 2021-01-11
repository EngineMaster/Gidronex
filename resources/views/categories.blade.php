@include('.includes.head')
@include('includes.header')
    <section class="categories_wrapper">
            @foreach($categories as $category)
                <div class="categories_wrapper_card">
                    <img src="{{$category->image}}" alt="" class="categories_wrapper_card_image" >
                    <div class="categories_wrapper_card_second_part">
                            <div class="categories_wrapper_card_name">{{$category->name}}</div>
                        <button class="btn_check_category"><a href="{{route('category',$category->name )}}">Смотреть</a></button>
                    </div>
                </div>
            @endforeach

        @if(session()->has('success_message'))
            {{session()->get('success_message')}}
            @endif
    </section>
</body>
