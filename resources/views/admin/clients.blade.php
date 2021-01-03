@extends('layouts.admin_layout')
@section('content')
<ul>
    @foreach($clients as $client)
        <li>{{$client->name}}, {{$client->phone}}, {{$client->commentary}}</li>
    @endforeach
</ul>
@endsection
