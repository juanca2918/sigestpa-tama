@extends('layouts.app')
@section('title', 'Detalles Personal')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 shadow-lg p-3 mb-5 bg-white rounded">
                <h3>Detalle Auxiliar</h3>
                <p><strong>ID. Auxiliar: </strong>{{ $auxiliar->idauxiliar }}</p>
                <p><strong>Estado: </strong>{{ $auxiliar->estado }}</p>
                <p><strong>ID. Usuario: </strong>{{ $auxiliar->id_personal }}</p>
                <a class="btn btn-success mr-2" role="button" href="{{ route('auxiliar.index') }}">Volver a lista Auxiliar</a>
                <a class="btn btn-warning" role="button" href="{{ route('auxiliar.edit',$auxiliar) }}">Editar Auxiliar</a>
                <div class="form-group">
                    <form action="{{ route('auxiliar.destroy', $auxiliar) }}" method="post">
                        @csrf
                        @method('delete')
                        <input class="btn btn-danger mt-3" role="button" type="submit" value="Eliminar Auxiliar">
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection
