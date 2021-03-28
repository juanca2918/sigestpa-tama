@extends('layouts.plantilla')
@section('title', 'Detalles Personal')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 shadow-lg p-3 mb-5 bg-white rounded">
                <h3>Detalle Historia Medica</h3>
                <p><strong>ID. Historia Medica: </strong>{{ $hismed -> idhistmed }}</p>
                <p><strong>ID. Paciente: </strong>{{ $hismed -> id_paciente }}</p>
                <p><strong>Fecha: </strong>{{ $hismed -> fecha }}</p>
                <p><strong>Antecedentes: </strong>{{ $hismed -> antecedentes }}</p>
                <p><strong>Alergias: </strong>{{ $hismed -> alergias }}</p>
                <p><strong>Info. Quirurgicas: </strong>{{ $hismed -> alergias }}</p>
                <p><strong>Ocupacion: </strong>{{ $hismed -> infquirurgica }}</p>
                <a class="btn btn-success mr-2" role="button" href="{{ route('historiamedica.index') }}">Volver a Lista Historia Medica </a>
                <a class="btn btn-warning" role="button" href="{{ route('historiamedica.edit',$histmed) }}">Editar Historia Medica</a>
                <div class="form-group">
                    <form action="{{ route('historiamedica.destroy', $hismed) }}" method="post">
                        @csrf
                        @method('delete')
                        <input class="btn btn-danger mt-3" role="button" type="submit" value="Eliminar Historia Medica">
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection
