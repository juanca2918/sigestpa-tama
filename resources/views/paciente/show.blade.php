@extends('layouts.app')
@section('title', 'Detalles Personal')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 shadow-lg p-3 mb-5 bg-white rounded">
                <h3>Detalle Paciente</h3>
                <p><strong>ID. Paciente: </strong>{{ $paciente->idpaciente }}</p>
                <p><strong>ID. Tipo Documento: </strong>{{ $paciente->id_tipodoc }}</p>
                <p><strong>Numero Documento: </strong>{{ $paciente->numdoc }}</p>
                <p><strong>Nombre: </strong>{{ $paciente->nombre }}</p>
                <p><strong>Apellido: </strong>{{ $paciente->apellido }}</p>
                <p><strong>Fecha Nacimiento: </strong>{{ $paciente->fechanac }}</p>
                <p><strong>Genero: </strong>{{ $paciente->genero }}</p>
                <p><strong>Estado Civil: </strong>{{ $paciente->estcivil }}</p>
                <p><strong>Seguro Social: </strong>{{ $paciente->segsocial }}</p>
                <p><strong>Telefono: </strong>{{ $paciente->tel }}</p>
                <p><strong>Direccion: </strong>{{ $paciente->dir }}</p>
                <p><strong>Email: </strong>{{ $paciente->email }}</p>
                <a class="btn btn-success mr-2" role="button" href="{{ route('paciente.index') }}">Volver a lista Personal </a>
                <a class="btn btn-warning" role="button" href="{{ route('paciente.edit',$paciente) }}">Editar Personal</a>
                <div class="form-group">
                    <form action="{{ route('paciente.destroy', $paciente) }}" method="post">
                        @csrf
                        @method('delete')
                        <input class="btn btn-danger mt-3" role="button" type="submit" value="Eliminar Paciente">
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection
