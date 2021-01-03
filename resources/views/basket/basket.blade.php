@include('includes.head')
@include('includes.header')


<div class="basket_container">
    <div class="basket_container_wrapper">

        <div class="basket_container_search">
            <div class="search_form">
                <form action="{{route('search')}}">
                    <input type="text" placeholder="Искать товары" name="search">
                        <button><span class="material-icons search" style=" color: white; margin-bottom: 50px">search</span></button>
                </form>
            </div>
            <div class="basket_container_sum">
                Сумма заказа <p>{{$total}}</p>
            </div>
        </div>
        <div class="basket_container_products">
            <div class="basket_container_products_table">
                <ul>
                    @foreach($items as $item)
                        <li>
                            {{$item->price}}

                        </li>
                        <li>
                            {{$item->name}}
                        </li>
                        <li>
                            {{$item->quantity}}
                        </li>

                        <li><form action="{{route('basket-add', $item->id)}}" method="POST">
                                <button type="submit" class="btn_product_select">+</button>
                                @csrf
                            </form></li>
                        <li><form action="{{route('basket-delete', $item->id)}}" method="POST">
                                <button type="submit" class="btn_product_select">-</button>
                                @csrf
                            </form></li>
                    @endforeach
                </ul>

            </div>
            @if(session()->has('success_message'))
                <div class="alert alert-success">
                    {{ session()->get('success_message') }}
                </div>
            @endif
        </div>
        <div class="basket_container_personal_reccomendations">
            <button><a href="{{route('basket-place')}}">GO!</a></button>
        </div>

    </div>
</div>


