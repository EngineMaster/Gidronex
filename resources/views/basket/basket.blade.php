@include('includes.head')
@include('includes.header')


<div class="basket_container">
    <div class="basket_container_wrapper">
        <div class="basket_container_wrapper_search">
            <div class="basket_container_sum">
                <div class="basket_count">
                    <p>Сумма заказа</p>
                </div>
                <div class="basket_count_total">
                    <p>{{$total}}</p>
                </div>
            </div>
            <div>
                <form action="{{route('search')}}" class="search_form">
                    <div class="search_form_input">
                    <input type="text"name="search" id="searchful">
                            <button>
                                <span class="material-icons">
                            search
                        </span>
                        </button>
                    </div>
                </form>
            </div>
        </div>

        @if(session()->has('success_message'))
            <div class="alert alert-success">
                {{ session()->get('success_message') }}
            </div>
        @endif

        <div class="basket_container_products">
            <div class="basket_container_products_table">
                <ul>
                    @if(!Cart::isEmpty())
                        <li class="table_basket">
                            Товар
                        </li>
                        <li class="table_basket">
                            Количество
                        </li>
                        <li class="table_basket">
                            Цена
                        </li>
                        <li class="table_basket">
                            Сумма
                        </li>
                        <li class="table_basket"></li>
                        <li class="table_basket"></li>
                    @foreach($items as $item)
                        <li>
                            <a href="{{route('product',[$item->quantity,$item->quantity,$item->name])}}">{{$item->name}}</a>
                        </li>
                        <li>
                            {{$item->quantity}}
                        </li>
                        <li>
                            {{$item->price}}

                        </li>
                        <li>
                            {{$all = $item->quantity * $item->price}}
                        </li>
                    <li class="add">
                       <form action="{{route('basket-add', $item->id)}}" method="POST">
                                <button type="submit" class="item_add">+</button>
                                @csrf
                            </form>
                        <form action="{{route('basket-delete', $item->id)}}" method="POST">
                                <button type="submit" class="item_remove">-</button>
                                @csrf
                            </form>
                        </li>
                        <li class="item_delete"><form action="{{route('basket-remove', $item->id)}}" method="POST">
                                <button type="submit" class="item_delete_button">Удалить</button>
                                @csrf
                            </form></li>
                    @endforeach
                    @else
                    <div class="basket_empty"><span class="material-icons search" style="color: black;font-weight: 800;font-size: 50px">shopping_basket</span>Пуста </div>
                        @endif
                </ul>

        </div>
        </div>
            <div class="elements_holder">
                @foreach($prods as $product)
                    <div class="element">
                        <p>{{$product->name}}</p>

                        <form action="{{route('basket-add', $product->id)}}" method="post">
                            <input type="submit" value="Добавить" class="add_product">
                            @csrf
                        </form>
                        <a href="{{route('product',[$product->id,$product->id,$product->name])}}"><button class="add_product_check">Смотреть</button></a>
                    </div>
                @endforeach
            </div>
        <div class="basket_container_personal_reccomendations">
            <button><a href="{{route('basket-place')}}">Подтвердить заказ</a></button>
            <p>
                Нажимая 'подтвердить заказз' вы подтвержаете что согласны с правилами сайта.
            </p>
        </div>

    </div>
</div>
<div class="pages">
    {{$prods->onEachSide(5)->links() }}
</div>


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

