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
                    
                    <div clas="col-md-3">
                        <div class="card border-danger mx-sm-1 p3">
                            
                            <div class="text-danger text-center mt-3"><h4>Usuarios Creados</h4></div>
                            <div class="text-danger text-center mt-3"><h1>{{ Auth::user()->count() }}</h1></div>

                        </div>
                        

                    </div>

                    {{ __('You are logged in!') }}
                </div>
            </div>

        </div>
    </div>
</div>


@endsection