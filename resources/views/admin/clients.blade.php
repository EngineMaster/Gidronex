
@section('title', 'Клиенты')
@section('content')
    <section class="content">
        <div class="container-fluid">
<ul>
    @foreach($clients as $client)
        <li>{{$client->name}}, {{$client->phone}}, {{$client->commentary}}</li>
    @endforeach
</ul>
        </div>
    </section>
@endsection
