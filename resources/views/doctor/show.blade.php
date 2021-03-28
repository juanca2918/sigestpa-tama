@extends('layouts.app')
@section('title', 'Detalles Personal')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 shadow-lg p-3 mb-5 bg-white rounded">
                <h3>Detalle Doctor</h3>
                <p><strong>ID. Doctor: </strong>{{ $doctor->iddoctor }}</p>
                <p><strong>ID. Estado: </strong>{{ $doctor->estado }}</p>
                <p><strong>ID. Personal: </strong>{{ $doctor->id_personal }}</p>
                <a class="btn btn-success mr-2" role="button" href="{{ route('doctor.index') }}">Volver a lista Doctores </a>
                <a class="btn btn-warning" role="button" href="{{ route('doctor.edit',$doctor) }}">Editar Doctor</a>
                <div class="form-group">
                    <form action="{{ route('doctor.destroy', $doctor) }}" method="post">
                        @csrf
                        @method('delete')
                        <input class="btn btn-danger mt-3" role="button" type="submit" value="Eliminar Doctor">
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection
