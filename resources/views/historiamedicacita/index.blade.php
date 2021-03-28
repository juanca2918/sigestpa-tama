@extends('layouts.plantilla')
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
                        <th>ID. Historia Medica Cita</th>
                        <th>Detalle Cita</th>
                        <th>Formulario</th>
                        <th>Fecha Cita</th>
                    </tr>
                    @foreach ($histmedica as $item)
                        <tr>
                            <td>{{ $item->idhistmedcita }}</td>
                            <td>{{ $item->detallecita }}</td>
                            <td>{{ $item->formula }}</td>
                            <td>{{ $item->fechacita }}</td>
                            <td style="display:flex;">
                                <a class="btn btn-success m-2" role="button" href="{{ route('historiamedicacita.show', $item->idhistmedcita) }}">Ver
                                </a>
                                <a class="btn btn-warning m-2" role="button" href="{{ route('historiamedicacita.edit', $item->idhistmedcita) }}">Editar
                                </a>
                                <a class="btn btn-danger m-2" role="button" href="{{ route('historiamedicacita.destroy', $item->idhistmedcita) }}">Eliminar
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
