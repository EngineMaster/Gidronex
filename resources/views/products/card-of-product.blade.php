@include('includes.head')
<div class="card_of_product">
    <img src="{{$prod->image}}" alt="product_image" class="image_product">
    <div class="product_layer">
        <div class="upper_menu">
            <h2>{{$prod->name}}</h2>
            <br>
            <p>
                {{$prod->description}}
                {{$prod->price}}
            </p>
        </div>
        <div class="lower_menu">
            <form action="{{route('basket-add', $prod->id)}}" method="POST">
                <button type="submit" class="btn_product_select">Заказать</button>
                @csrf
            </form>
            <div class="category_name">{{$prod->category->name}}</div>
            <button class="btn_product_select"><a href="{{route('product',[$prod->category->id, $prod->id])}}">Подробнее</a></button>
        </div>
    </div>
</div>
