@extends('layouts.app')
@section('title', 'Ingresa tipo de documento')
@section('content')
    <div class="container">
        <h3 class="h3">Actualiza tipo de documento</h3>
        <div class="form-group shadow-lg p-3 mb-5 bg-white rounded">
            <form action="{{ route('tipodocumento.update', $tipodoc) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group col-md-6 ">
                    <div class="input-group mt-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Actualiza tipo de documento</span>
                        </div>
                            <input type="text" class="form-control" value="{{$tipodoc->nomdoc}}" name="nombre_documento" placeholder="Tipo de documento" aria-label="Tipo de Documento" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group col-md-6 mt-3">
                        <input class="btn btn-success" type="submit" value="Actualizar">
                    </div>
                </div>
            </form>
            <div class="form-group">
                <a href="{{route('tipodocumento.index')}}" class="btn btn-warning">Regresa a lista Documentos</a>
            </div>
        </div>
    </div>
@endsection
