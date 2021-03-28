@extends('layouts.app')
@section('title', 'Detalles Cita')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 shadow-lg p-3 mb-5 bg-white rounded">
                <h3>Detalle Cita</h3>
                <p><strong>ID. Cita: </strong>{{ $cita->idcita }}</p>
                <p><strong>Fecha: </strong>{{ $cita->fecha }}</p>
                <p><strong>Descripcion: </strong>{{ $cita->descripcion }}</p>
                <p><strong>ID. Paciente: </strong>{{ $cita->id_paciente }}</p>
                <p><strong>ID. Doctor: </strong>{{ $cita->id_doctor }}</p>
                <p><strong>ID. Auxiliar: </strong>{{ $cita->id_auxiliar }}</p>
                <a class="btn btn-success mr-2" role="button" href="{{ route('cita.index') }}">Volver a lista Cita </a>
                <a class="btn btn-warning" role="button" href="{{ route('cita.edit',$cita) }}">Editar Cita</a>
                <div class="form-group">
                    <form action="{{ route('cita.destroy', $cita) }}" method="post">
                        @csrf
                        @method('delete')
                        <input class="btn btn-danger mt-3" role="button" type="submit" value="Eliminar Cita">
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection
