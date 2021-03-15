@extends('includes.head')
@section('title','section')
@section('content')
    <body>
    @include('includes.header')
<section class="section_category">
                <h1>{{$sections->name}}</h1>
            <form action="{{route('search')}}" class="search_form2" >
                    <input type="search" name="search" id="searchful" required>
                    <button>
                        <span class="material-icons" id="fa fa-search">
                            search
                        </span>
                    </button>
            </form>
    <div class="elements_holder">
            @foreach($produs as $product)
                        <div class="element">
                            <a href="{{route('product',[$product->id,$product->id,$product->name])}}"><p>{{$product->name}}</p></a>

                            <form action="{{route('basket-add', $product->id)}}" method="post">
                                <input type="submit" value="Добавить" class="add_product2">
                                @csrf
                            </form>
                            <a href="{{route('product',[$product->id,$product->id,$product->name])}}"><button class="add_product_check">
                                @if($product->price == 0 )
                                        Цена по запросу
                                    @else
                                        {{$product->price}}₽
                                    @endif
                                </button>
                            </a>
                        </div>
            @endforeach
    </div>

    @if(session()->has('success_message'))
        <div class="success">
            <p class="cross_to_close">
            </p>
            <div class="success_wrap">
                <ul class="success_wrap_category">
                    <p> Вам может быть интересно</p>
                    @foreach($clientsCategory as $clientCat)
                        <li><a href="{{route('category',[$clientCat->id])}}">{!! $clientCat->name !!}</a></li>
                    @endforeach
                </ul>
                <div class="success_wrap_buttons">

                    <p>
                        {{ session()->get('success_message') }}
                    </p>

                    <a href="{{route('basket')}}" >
                        <button class="add_product_check">
                            Перейти в корзину
                        </button>
                    </a>

                </div>
            </div>
        </div>
    @endif
</section>
<script>
  document.querySelector('.cross_to_close').onclick = function () {
      let successMessage = document.querySelector('.success');
      successMessage.classList.add('hide');
  };
</script>
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
@endsection
