@extends('layouts.app')
@section('title', 'Bienvenido a Historia Medica Cita')
@section('content')
    <div class="container-fluid">
        <h3 class="text-center">Bienvenido a Historia Medica Cita</h3>
        <div class="">
            <a class="btn btn-primary m-2" role="button" href="{{ route('historiamedicacita.create') }}">Crear Historia Medica Cita</a>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered table-striped table-hover">
                    <tr>
                        <th>ID. Historia Medica Cita</th>
                        <th>Fecha</th>
                        <th>Descripcion</th>
                        <th>ID. Historia Medica</th>
                        <th>ID. Cita</th>
                        <th>Acciones</th>
                    </tr>
                    @foreach ($histmedc as $item)
                        <tr>
                            <td>{{ $item->idcita }}</td>
                            <td>{{ $item->fecha }}</td>
                            <td>{{ $item->descripcion }}</td>
                            <td>{{ $item->id_histmed }}</td>
                            <td>{{ $item->id_cita }}</td>
                            <td style="display:flex;">
                                <a class="btn btn-success m-2" role="button" href="{{ route('historiamedicacita.show', $item->idcita) }}">Ver
                                </a>
                                <a class="btn btn-warning m-2" role="button" href="{{ route('historiamedicacita.edit', $item->idcita) }}">Editar
                                </a>
                                <a class="btn btn-danger m-2" role="button" href="{{ route('historiamedicacita.destroy', $item->idcita) }}">Eliminar
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
