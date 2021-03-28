@extends('layouts.app')
@section('title', 'Bienvenido a Tipo de Documento')
@section('content')
    <div class="container">
        <h3 class="h3">Bienvenido a tipo de documento</h3>
        <div class="">
            <a class="btn btn-primary m-2" role="button" href="{{ route('tipodocumento.create') }}">Crear tipo Documento</a>
        </div>
        <div class="">
            <table class="table table-bordered table-striped table-hover">
                <tr>
                    <th>ID. Tipo de Documento</th>
                    <th>Nombre de Documento</th>
                    <th>Operaciones</th>
                </tr>
                @foreach ($tipodoc as $item)
                    <tr>
                        <td>{{ $item->idtipodoc }}</td>
                        <td>
                            {{$item->nomdoc}}
                        </td>
                        <td>
                            <a class="btn btn-success m-2" role="button" href="{{ route('tipodocumento.show', $item->idtipodoc) }}">Ver
                            </a>
                            <a class="btn btn-warning m-2" role="button" href="{{ route('tipodocumento.edit', $item->idtipodoc) }}">Editar
                            </a>
                            <a class="btn btn-danger m-2" role="button" href="{{ route('tipodocumento.destroy', $item->idtipodoc) }}">Eliminar
                            </a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection
