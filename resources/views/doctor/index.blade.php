@extends('layouts.app')
@section('title', 'Bienvenido a Doctor')
@section('content')
    <div class="container-fluid">
        <h3 class="text-center">Bienvenido a Doctor</h3>
        <div class="">
            <a class="btn btn-primary m-2" role="button" href="{{ route('doctor.create') }}">Ingresar Doctor</a>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered table-striped table-hover">
                    <tr>
                        <th>ID. Doctor</th>
                        <th>Estado</th>
                        <th>ID. Personal</th>
                        <th>Acciones</th>
                    </tr>
                    @foreach ($doctor as $item)
                        <tr>
                            <td>{{ $item->iddoctor }}</td>
                            <td>{{ $item->estado }}</td>
                            <td>{{ $item->id_personal }}</td>
                            <td style="display:flex;">
                                <a class="btn btn-success m-2" role="button" href="{{ route('doctor.show', $item->iddoctor) }}">Ver
                                </a>
                                <a class="btn btn-warning m-2" role="button" href="{{ route('doctor.edit', $item->iddoctor) }}">Editar
                                </a>
                                <a class="btn btn-danger m-2" role="button" href="{{ route('doctor.destroy', $item->iddoctor) }}">Eliminar
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
