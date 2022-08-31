@extends('layouts.template')

@section('template_title')
    Create Nota
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Create Nota</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('notas.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf
                            
                            @include('nota.form')

                        </form>
                        <div class="card">
                            <div class="card-header">Importar productos</div>
            
                            <div class="card-body">
                                @if (isset($errors) && $errors->any())
                                <div class="alert alert-danger" role="alert">
                                    @foreach ($errors->all() as $error)
                                    {{$error}}
                                    @endforeach
                                </div>
                                @endif
            
                                <form action="{{route('notas.store')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
            
                                    <input type="file" name="import_file" />
            
                                    <button class="btn btn-primary" type="submit">Importar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
