@extends('includes.head')
@section('title','article')
@section('content')
    <body>
    @include('includes.header')


    <section class="section_category">
            <form action="{{route('search')}}" class="search_form2"  style="margin-top: 50px">
                <input type="search" name="search" id="searchful" required>
                <button>
                        <span class="material-icons" id="fa fa-search">
                            search
                        </span>
                </button>
            </form>

        <div class="elements_holder">
                @if (isset($data) && count($data) > 0)
                    @foreach( $data as $business )
                    <div class="element">
                        <p>{{ $business->name }}</p>

                        <form action="{{route('basket-add', $business->id)}}" method="post">
                            <input type="submit" value="Добавить" class="add_product">
                            @csrf
                        </form>
                        <a href="{{route('product',[$business->id,$business->id,$business->name])}}"><button class="add_product_check">Смотреть</button></a>
                    </div>
                    @endforeach
                @endif
        </div>
    </section>
<script>
    document.querySelector('#searchful').oninput = function () {
        let val = this.value.trim();
        let elastiEms = document.querySelectorAll('.element')
        if (val != ""){
            elastiEms.forEach(function (elem) {
                if (elem.innerText.search(val) == -1){
                    elem.classList.add('hide');
                }
                else{
                    elem.classList.remove('hide');
                }
            });
        }
        else{
            elastiEms.forEach(function (elem) {
                elem.classList.remove('hide');
            })
        }
    }
</script>
    </body>
@include('includes.footer')
@endsection
