@extends('includes.head')
@include('includes.header')
<body>
<div class="basket_container">
    <div class="basket_container_wrapper">
<div class="elements_holder">
    @if (isset($data) && count($data) > 0)
        @foreach( $data as $business )
        <div class="element">
            <p>{{ $business->name }}</p>
            <form action="{{route('basket-add', $business->id)}}" method="post">
                <input type="submit" value="Добавить" class="add_product">
                @csrf
            </form>
        </div>
        @endforeach
    @endif
</div>
    </div>
</div>
</body>
@include('includes.footer')
