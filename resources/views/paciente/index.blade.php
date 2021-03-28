@extends('layouts.app')
@section('title', 'Bienvenido, Ingresa un Paciente')
@section('content')
    <div class="container-fluid">
        <h3 class="text-center">Bienvenido a Paciente</h3>
        <div class="">
            <a class="btn btn-primary m-2" role="button" href="{{ route('paciente.create') }}">Crear Personal</a>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered table-striped table-hover">
                    <tr>
                        <th>ID.Paciente</th>
                        <th>ID.Tipo Documento</th>
                        <th>Numero Documento</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Fecha Nacimiento</th>
                        <th>Genero</th>
                        <th>Estado Civil</th>
                        <th>Seguro Social</th>
                        <th>Telefono</th>
                        <th>Direccion</th>
                        <th>Email</th>
                        <th>Acciones</th>
                    </tr>
                    @foreach ($paciente as $item)
                        <tr>
                            <td>{{ $item->idpaciente }}</td>
                            <td>{{ $item->id_tipodoc }}</td>
                            <td>{{ $item->numdoc }}</td>
                            <td>{{ $item->nombre }}</td>
                            <td>{{ $item->apellido }}</td>
                            <td>{{ $item->fechanac }}</td>
                            <td>{{ $item->genero }}</td>
                            <td>{{ $item->estcivil }}</td>
                            <td>{{ $item->segsocial }}</td>
                            <td>{{ $item->tel }}</td>
                            <td>{{ $item->dir }}</td>
                            <td>{{ $item->email }}</td>
                            <td style="display:flex;">
                                <a class="btn btn-success m-2" role="button" href="{{ route('paciente.show', $item->idpaciente) }}">Ver
                                </a>
                                <a class="btn btn-warning m-2" role="button" href="{{ route('paciente.edit', $item->idpaciente) }}">Editar
                                </a>
                                <a class="btn btn-danger m-2" role="button" href="{{ route('paciente.destroy', $item->idpaciente) }}">Eliminar
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
