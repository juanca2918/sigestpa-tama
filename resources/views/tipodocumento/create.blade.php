@extends('layouts.app')
@section('title', 'Ingresa el tipo de documento')
@section('content')
    <div class="container">
        <h3 class="h3">Crea tipo de documento</h3>
        <div class="form-group shadow-lg p-3 mb-5 bg-white rounded">
            <form action="{{ route('tipodocumento.store') }}" method="POST">
                @csrf
                @method('post')
                <div class="form-group col-md-6 ">
                    <div class="input-group mt-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Crea tipo de documento</span>
                        </div>
                        <input type="text" class="form-control" name="nombre_documento" placeholder="Tipo de documento" aria-label="Tipo de Documento" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group col-md-6 mt-3">
                        <input class="btn btn-success" type="submit" value="Crear tipo documento">
                    </div>
                </div>
            </form>
            <div class="col-md-6 text-center">
                <a href="{{route('tipodocumento.index')}}" class="btn btn-warning">Regresa a lista Documentos</a>
            </div>
        </div>
    </div>
@endsection
