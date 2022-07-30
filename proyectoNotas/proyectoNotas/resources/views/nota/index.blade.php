@extends('layouts.app')

@section('template_title')
Nota
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">

                        <span id="card_title">
                            {{ __('Nota') }}
                        </span>

                        <div class="float-right">
                            <a href="{{ route('notas.create') }}" class="btn btn-primary btn-sm float-right"
                                data-placement="left">
                                {{ __('Create New') }}
                            </a>
                        </div>
                    </div>
                </div>
                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
                @endif

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead class="thead">
                                <tr>
                                    <th>No</th>

                                    <th>Estudiante Id</th>
                                    <th>Curso Id</th>
                                    <th>Nota1</th>
                                    <th>Nota2</th>
                                    <th>Nota3</th>
                                    <th>Nota4</th>
                                    <th>Nota5</th>
                                    <th>Notafinal</th>

                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($notas as $nota)
                                <tr>
                                    <td>{{ ++$i }}</td>

                                    <td>{{ $nota->estudiante_id }}</td>
                                    <td>{{ $nota->curso->nombre }}</td>
                                    <td>{{ $nota->nota1 }}</td>
                                    <td>{{ $nota->nota2 }}</td>
                                    <td>{{ $nota->nota3 }}</td>
                                    <td>{{ $nota->nota4 }}</td>
                                    <td>{{ $nota->nota5 }}</td>
                                    <td>{{ $nota->notafinal }}</td>
                                
                                    <td>
                                        <form action="{{ route('notas.destroy',$nota->id) }}" method="POST">
                                            <a class="btn btn-sm btn-primary "
                                                href="{{ route('notas.show',$nota->id) }}"><i
                                                    class="fa fa-fw fa-eye"></i> Show</a>
                                            <a class="btn btn-sm btn-success"
                                                href="{{ route('notas.edit',$nota->id) }}"><i
                                                    class="fa fa-fw fa-edit"></i> Edit</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm"><i
                                                    class="fa fa-fw fa-trash"></i> Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {!! $notas->links() !!}
        </div>
    </div>
</div>
@endsection