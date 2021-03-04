@extends('layouts.admin_layout')
@section('title', 'Главная')

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>{{$prods}} Продукта</h3>

                            <p>Редактирование и удаление</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                        <a href="{{route('productsUpdate')}}" class="small-box-footer">Редактировать и удалить <br><i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>{{$posts}}<sup style="font-size: 20px"></sup></h3>

                            <p>Посты</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="{{route('admin-posts')}}" class="small-box-footer">More info <br><i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>{{$feedback}}</h3>

                            <p>Заявок:</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="{{route('clients')}}" class="small-box-footer">More info <br><i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>{{$prods}}</h3>

                            <p>Заявок на покупку</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-pie-graph"></i>
                        </div>
                        <a href="{{route('clients')}}" class="small-box-footer">Заявки <br><i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
            </div>

            @if(session()->has('message_success'))
                <div class="alert alert-success col-xl-2" role="alert">
                    {{ session()->get('message_success') }}
                </div>
            @endif
    @if(session()->has('message_error'))
                <div class="alert alert-danger" role="alert">
                    {{ session()->get('message_error') }}
                </div>
    @endif

@endsection
