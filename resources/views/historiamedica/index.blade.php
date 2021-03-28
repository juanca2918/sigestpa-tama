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
                        <th>ID. Historia Medica</th>
                        <th>ID. Pacienter</th>
                        <th>Fecha</th>
                        <th>Antecedentes</th>
                        <th>Alergias</th>
                        <th>Info. Quirurgica</th>
                        <th>Ocupacion</th>
                    </tr>
                    @foreach ($histmed as $item)
                        <tr>
                            <td>{{ $item->idhistmed }}</td>
                            <td>{{ $item->id_paciente }}</td>
                            <td>{{ $item->fecha }}</td>
                            <td>{{ $item->antecedentes }}</td>
                            <td>{{ $item->alergias }}</td>
                            <td>{{ $item->infquirurgica }}</td>
                            <td>{{ $item->ocupacion }}</td>
                            <td style="display:flex;">
                                <a class="btn btn-success m-2" role="button" href="{{ route('historiamedica.show', $item->idhistmed) }}">Ver
                                </a>
                                <a class="btn btn-warning m-2" role="button" href="{{ route('historiamedica.edit', $item->idhistmed) }}">Editar
                                </a>
                                <a class="btn btn-danger m-2" role="button" href="{{ route('historiamedica.destroy', $item->idhistmed) }}">Eliminar
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
