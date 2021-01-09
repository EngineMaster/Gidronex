@include('includes.head')
<style>
    .element{
        display: block;
    }

    .hide{
        display: none;
    }
</style>
@include('includes.header')


<div class="basket_container">
    <div class="basket_container_wrapper">
        <div class="basket_container_search">
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
                            <button><span class="material-icons">
                            search
                        </span>
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <div class="elements_holder">
            @foreach($products as $product)
                <div class="element">{{$product->name}}
                    <form action="{{route('basket-add', $product->id)}}" method="post">
                        <input type="submit" value="add">
                        @csrf
                    </form>
                </div>
            @endforeach
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
                        <li><form action="{{route('basket-remove', $item->id)}}" method="POST">
                                <button type="submit" class="btn_product_select">Удалить элемент</button>
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
            <button><a href="{{route('basket-place')}}">Подтвердить заказ</a></button>
        </div>

    </div>
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
                elem.classList.add('hide');
            })
        }
    }


</script>

