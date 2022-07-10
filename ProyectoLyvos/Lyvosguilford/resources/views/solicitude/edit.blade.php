@extends('layouts.appHome')

@section('template_title')
    Update Solicitude
@endsection

@section('content')
    <section class="content container-fluid"style="margin-top: 4%">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Solicitude</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('solicitudes.update', $solicitude->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('solicitude.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
