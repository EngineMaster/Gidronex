@extends('layouts.admin_layout')
@section('title', 'Удаление и редактирование')
@section('content')
    <div class="jumbotron">
        <form action="{{route('post-insert')}}" method="post">
            <input type="text" name="title" placeholder="Имя товара" class="display-4">
            <input type="text" name="subtitle" placeholder="Цена">
            <input type="text" name="article" placeholder="Индекс/Артикул">
            <input type="text" name="article2" placeholder="Количество" >
            <button type="submit" class="btn btn-secondary"> Подтвердить </button>
            @csrf
        </form>

    <ul>
@foreach($posts as $post)
    <li>{{$post->title}} {{$post->subtitle}}</li>
@endforeach
    </ul>
@endsection
