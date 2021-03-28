@extends('layouts.app')
@section('title', 'Detalles Personal')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 shadow-lg p-3 mb-5 bg-white rounded">
                <h3>Detalle Personal</h3>
                <p><strong>ID. Personal: </strong>{{ $personal->idpersonal }}</p>
                <p><strong>ID. Tipo Documento: </strong>{{ $personal->id_tipodocumento }}</p>
                <p><strong>ID. Usuario: </strong>{{ $personal->id_user }}</p>
                <p><strong>ID. Tipo Documento: </strong>{{ $personal->numdoc }}</p>
                <p><strong>ID. Tipo Documento: </strong>{{ $personal->tel }}</p>
                <p><strong>ID. Tipo Documento: </strong>{{ $personal->fechanac }}</p>
                <p><strong>ID. Tipo Documento: </strong>{{ $personal->genero }}</p>
                <p><strong>ID. Tipo Documento: </strong>{{ $personal->estcivil }}</p>
                <p><strong>ID. Tipo Documento: </strong>{{ $personal->segsocial }}</p>
                <p><strong>ID. Tipo Documento: </strong>{{ $personal->dir }}</p>
                <a class="btn btn-success mr-2" role="button" href="{{ route('personal.index') }}">Volver a lista Personal </a>
                <a class="btn btn-warning" role="button" href="{{ route('personal.edit',$personal) }}">Editar Personal</a>
                <div class="form-group">
                    <form action="{{ route('personal.destroy', $personal) }}" method="post">
                        @csrf
                        @method('delete')
                        <input class="btn btn-danger mt-3" role="button" type="submit" value="Eliminar Personal">
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection
