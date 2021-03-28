@extends('layouts.plantilla')
@section('title', 'Detalles Personal')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 shadow-lg p-3 mb-5 bg-white rounded">
                <h3>Detalle Historia Medica Cita</h3>
                <p><strong>ID. Personal: </strong>{{ $hismedc->idhistmedcita }}</p>
                <p><strong>ID. Tipo Documento: </strong>{{ $personal->detallecita }}</p>
                <p><strong>ID. Usuario: </strong>{{ $personal->formula }}</p>
                <p><strong>ID. Tipo Documento: </strong>{{ $personal->fechacita }}</p>
                <a class="btn btn-success mr-2" role="button" href="{{ route('historiamedicacita.index') }}">Volver a lista Personal </a>
                <a class="btn btn-warning" role="button" href="{{ route('historiamedicacita.edit',$personal) }}">Editar Personal</a>
                <div class="form-group">
                    <form action="{{ route('historiamedicacita.destroy', $personal) }}" method="post">
                        @csrf
                        @method('delete')
                        <input class="btn btn-danger mt-3" role="button" type="submit" value="Eliminar Auxiliar">
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection
