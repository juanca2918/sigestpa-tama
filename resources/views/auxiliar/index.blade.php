@extends('layouts.app')
@section('title', 'Bienvenido a Historia Medica Cita')
@section('content')
    <div class="container-fluid">
        <h3 class="text-center">Bienvenido a Auxiliar</h3>
        <div class="">
            <a class="btn btn-primary m-2" role="button" href="{{ route('auxiliar.create') }}">Crear Personal</a>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered table-striped table-hover">
                    <tr>
                        <th>ID. Auxiliar</th>
                        <th>Estado</th>
                        <th>ID. Personal</th>
                    </tr>
                    @foreach ($auxiliar as $item)
                        <tr>
                            <td>{{ $item->idauxiliar }}</td>
                            <td>{{ $item->estado }}</td>
                            <td>{{ $item->id_personal }}</td>
                            <td style="display:flex;">
                                <a class="btn btn-success m-2" role="button" href="{{ route('auxiliar.show', $item->idauxiliar) }}">Ver
                                </a>
                                <a class="btn btn-warning m-2" role="button" href="{{ route('auxiliar.edit', $item->idauxiliar) }}">Editar
                                </a>
                                <a class="btn btn-danger m-2" role="button" href="{{ route('auxiliar.destroy', $item->idauxiliar) }}">Eliminar
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
