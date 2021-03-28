@extends('layouts.app')
@section('title', 'Detalles Historia Medica Cita')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 shadow-lg p-3 mb-5 bg-white rounded">
                <h3>Detalle Historia Medica Cita</h3>
                <p><strong>ID. Personal: </strong>{{ $hismedc->idcita }}</p>
                <p><strong>Fecha: </strong>{{ $hismedc->fecha }}</p>
                <p><strong>Descripcion: </strong>{{ $hismedc->formula }}</p>
                <p><strong>ID. Historia Medica: </strong>{{ $hismedc->id_histmed }}</p>
                <p><strong>ID. Cita: </strong>{{ $hismedc->id_cita }}</p>
                <a class="btn btn-success mr-2" role="button" href="{{ route('historiamedicacita.index') }}">Volver a lista Historia Medica Cita</a>
                <a class="btn btn-warning" role="button" href="{{ route('historiamedicacita.edit',$hismedc) }}">Editar Historia Medica Cita</a>
                <div class="form-group">
                    <form action="{{ route('historiamedicacita.destroy', $histmedc) }}" method="post">
                        @csrf
                        @method('delete')
                        <input class="btn btn-danger mt-3" role="button" type="submit" value="Eliminar Historia Medica Cita">
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection
