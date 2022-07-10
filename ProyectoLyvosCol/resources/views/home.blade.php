@extends('layouts.template')

@section('content')

<div class="content">
    <div class="row m-0" >
        <div class="col-md-12">
            <h3 class="description">{{ __('Dashboard') }}</h3>
            <div class="card">

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>

        </div>
    </div>
</div>


@endsection