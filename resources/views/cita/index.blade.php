@extends('layouts.app')
@section('title', 'Bienvenido a Cita')
@section('content')
    <div class="container-fluid">
        <h3 class="text-center">Bienvenido a Cita</h3>
        <div class="">
            <a class="btn btn-primary m-2" role="button" href="{{ route('cita.create') }}">Crear Cita</a>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered table-striped table-hover">
                    <tr>
                        <th>ID. Cita</th>
                        <th>Fecha</th>
                        <th>Descripcion</th>
                        <th>ID. Paciente</th>
                        <th>ID. Doctor</th>
                        <th>ID. Auxiliar</th>
                        <th>Acciones</th>
                    </tr>
                    @foreach ($cita as $item)
                        <tr>
                            <td>{{ $item->idcita }}</td>
                            <td>{{ $item->fecha }}</td>
                            <td>{{ $item->descripcion }}</td>
                            <td>{{ $item->id_paciente }}</td>
                            <td>{{ $item->id_doctor }}</td>
                            <td>{{ $item->id_auxiliar }}</td>
                            <td style="display:flex;">
                                <a class="btn btn-success m-2" role="button"
                                   href="{{ route('cita.show', $item->idcita) }}">Ver
                                </a>
                                <a class="btn btn-warning m-2" role="button"
                                   href="{{ route('cita.edit', $item->idcita) }}">Editar
                                </a>
                                <a class="btn btn-danger m-2" role="button"
                                   href="{{ route('cita.destroy', $item->idcita) }}">Eliminar
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
