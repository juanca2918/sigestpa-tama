@extends('layouts.app')
@section('title', 'Bienvenido a Historia Medica Cita')
@section('content')
    <div class="container-fluid">
        <h3 class="text-center">Bienvenido a Historia Medica Cita</h3>
        <div class="">
            <a class="btn btn-primary m-2" role="button" href="{{ route('historiamedicacita.create') }}">Crear Personal</a>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered table-striped table-hover">
                    <tr>
                        <th>ID. Doctor</th>
                        <th>Estado</th>
                        <th>ID. Personal</th>
                    </tr>
                    @foreach ($doctor as $item)
                        <tr>
                            <td>{{ $item->iddoctor }}</td>
                            <td>{{ $item->id_personal }}</td>
                            <td>{{ $item->estado }}</td>
                            <td style="display:flex;">
                                <a class="btn btn-success m-2" role="button" href="{{ route('doctor.show', $item->$doctor) }}">Ver
                                </a>
                                <a class="btn btn-warning m-2" role="button" href="{{ route('doctor.edit', $item->$doctor) }}">Editar
                                </a>
                                <a class="btn btn-danger m-2" role="button" href="{{ route('doctor.destroy', $item->$doctor) }}">Eliminar
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
