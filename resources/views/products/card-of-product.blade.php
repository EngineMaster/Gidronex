@include('includes.head')
<div class="card_of_product">
    <img src="{{$prod->image}}" alt="product_image" class="image_product">
    <div class="product_layer">
        <div class="upper_menu">
            <h2>{{$prod->name}}</h2>
            <br>
            <p>
                {{$prod->index}}
            </p>
        </div>
        <div class="lower_menu">
            <div class="category_name">{{$prod->name}}</div>
            <div class="category_name">{{$prod->description}}</div>
            <button class="btn_product_select"><a href="{{route('section',[$prod->id, $prod->name])}}">Подробнее</a></button>
        </div>
    </div>
</div>
