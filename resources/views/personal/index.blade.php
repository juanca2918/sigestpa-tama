@extends('layouts.app')
@section('title', 'Bienvenido a Personal')
@section('content')
    <div class="container-fluid">
        <h3 class="text-center">Bienvenido a Personal</h3>
        <div class="">
            <a class="btn btn-primary m-2" role="button" href="{{ route('personal.create') }}">Crear Personal</a>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered table-striped table-hover">
                    <tr>
                        <th>ID. Personal</th>
                        <th>ID. Tipo Documento</th>
                        <th>ID. Usuario</th>
                        <th>Numero Documento</th>
                        <th>Telefono</th>
                        <th>Fecha Nacimiento</th>
                        <th>Genero</th>
                        <th>Estado Civil</th>
                        <th>Seguro Social</th>
                        <th>Direccion</th>
                        <th>Acciones</th>
                    </tr>
                    @foreach ($personal as $item)
                        <tr>
                            <td>{{ $item->idpersonal }}</td>
                            <td>{{ $item->id_tipodocumento }}</td>
                            <td>{{ $item->id_user }}</td>
                            <td>{{ $item->numdoc }}</td>
                            <td>{{ $item->tel }}</td>
                            <td>{{ $item->fechanac }}</td>
                            <td>{{ $item->genero }}</td>
                            <td>{{ $item->estcivil }}</td>
                            <td>{{ $item->segsocial }}</td>
                            <td>{{ $item->dir }}</td>
                            <td style="display:flex;">
                                <a class="btn btn-success m-2" role="button" href="{{ route('personal.show', $item->idpersonal) }}">Ver
                                </a>
                                <a class="btn btn-warning m-2" role="button" href="{{ route('personal.edit', $item->idpersonal) }}">Editar
                                </a>
                                <a class="btn btn-danger m-2" role="button" href="{{ route('personal.destroy', $item->idpersonal) }}">Eliminar
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
