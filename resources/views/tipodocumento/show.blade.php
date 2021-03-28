@extends('layouts.app')
@section('title', 'Detalles tipo de documento')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 shadow-lg p-3 mb-5 bg-white rounded">
                <h3 class="h3">Detalle Documento</h3>
                <p><strong>ID. Tipo Documento: </strong>{{ $tipodoc->idtipodoc }}</p>
                <p><strong>Nombre Documento: </strong>{{ $tipodoc->nomdoc }}</p>
                <a class="btn btn-success mr-2" role="button" href="{{ route('tipodocumento.index') }}">Volver a todos los documentos </a>
                <a class="btn btn-warning" role="button" href="{{ route('tipodocumento.edit',$tipodoc) }}">Editar Documento</a>
                <div class="form-group">
                    <form  action="{{ route('tipodocumento.destroy', $tipodoc) }}" method="post">
                        @csrf
                        @method('delete')
                        <input class="btn btn-danger mt-3" role="button" type="submit" value="Eliminar tipo documento">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
