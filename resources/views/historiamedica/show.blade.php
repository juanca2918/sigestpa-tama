@extends('layouts.app')
@section('title', 'Detalles Historia Medica')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 shadow-lg p-3 mb-5 bg-white rounded">
                <h3>Detalle Historia Medica</h3>
                <p><strong>ID. Historia Medica: </strong>{{ $histmed -> idhistmed }}</p>
                <p><strong>ID. Paciente: </strong>{{ $histmed -> id_paciente }}</p>
                <p><strong>Fecha: </strong>{{ $histmed -> fecha }}</p>
                <p><strong>Antecedentes: </strong>{{ $histmed -> antecedentes }}</p>
                <p><strong>Alergias: </strong>{{ $histmed -> alergias }}</p>
                <p><strong>Info. Quirurgicas: </strong>{{ $histmed -> infquirurgica }}</p>
                <p><strong>Ocupacion: </strong>{{ $histmed -> ocupacion }}</p>
                <a class="btn btn-success mr-2" role="button" href="{{ route('historiamedica.index') }}">Volver a Lista Historia Medica </a>
                <a class="btn btn-warning" role="button" href="{{ route('historiamedica.edit',$histmed) }}">Editar Historia Medica</a>
                <div class="form-group">
                    <form action="{{ route('historiamedica.destroy', $histmed) }}" method="post">
                        @csrf
                        @method('delete')
                        <input class="btn btn-danger mt-3" role="button" type="submit" value="Eliminar Historia Medica">
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection
