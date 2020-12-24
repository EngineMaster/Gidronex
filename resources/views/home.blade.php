@extends('includes.head')
ASSCRACK
{{ __('Dashboard') }}

    @if (session('status'))
            {{ session('status') }}
    @endif

    {{ __('You are logged in!') }}

@section('content')
<div class="container_login">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!')}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
