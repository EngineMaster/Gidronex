@extends('layouts.admin_layout')
@section('title', 'Удаление и редактирование')
@section('content')
    <div class="jumbotron">
        <h3>Добавить Категорию</h3>
        <form action="{{route('admin-insert-category')}}" method="post">
            <input type="number" name="name" placeholder="Категория">
            <input type="text" name="index" placeholder="Имя товара" class="display-4">
            <input type="number" name="description" placeholder="Цена">
            <input type="text" name="image" placeholder="Индекс/Артикул">
            <button type="submit" class="btn btn-secondary"> Подтвердить </button>
            @csrf
        </form>
    </div>

    <div class="jumbotron">
        <h3>Добавить Товар</h3>
        <form action="{{route('admin-insert')}}" method="post">
            <input type="number" name="category_id" placeholder="Категория">
            <input type="text" name="name" placeholder="Имя товара" class="display-4">
            <input type="number" name="price" placeholder="Цена">
            <input type="text" name="index" placeholder="Индекс/Артикул">
            <input type="number" name="qty" placeholder="Количество" >
            <button type="submit" class="btn btn-secondary"> Подтвердить </button>
            @csrf
        </form>
    </div>

<ul>
    @foreach($prods as $product)
        <li>{{$product->name}}</li>
        <div class="jumbotron">
            <form action="{{route('productsUpdateId' , $product->id)}}" method="post">
                <input type="text" name="name" placeholder="Имя товара" class="display-4">
                <input type="number" name="price" placeholder="Цена">
                <input type="text" name="index" placeholder="Индекс/Артикул">
                <input type="number" name="qty" placeholder="Количество" >
                <button type="submit" class="btn btn-secondary"> Подтвердить </button>
                @csrf
            </form>

            <form action="{{route('productsDelete' , $product->id)}}" method="post">
                @csrf
                <button type="submit">Delete</button>
            </form>
        </div>
    @endforeach
</ul>

@endsection
