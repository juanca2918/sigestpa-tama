@extends('layouts.app')
@section('title', 'Actualizar Paciente')
@section('content')
    <div class="container min-vh-100 d-flex flex-column justify-content-center align-items-center">
        <div class="shadow-lg p-5 bg-white rounded w-100">
            <div class="row d-flex flex-column justify-content-center align-items-center">
                <div class="col-md-8">
                    <h3 class="text-center">Crear Paciente</h3>
                    {{--Inicio Formulario--}}
                    <form action="{{ route('paciente.store') }}" method="POST">
                        @csrf
                        @method('put')
                        <div class="form-group">

                            {{--Div Id.Paciente--}}
                            <div class="input-group m-3" readonly>
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">ID.Paciente</span>
                                </div>
                                <input type="text" value="{{$paciente->idpaciente}}" name="idpac" class="form-control" placeholder="ID.Paciente" aria-label="Id.Paciente"
                                       aria-describedby="basic-addon1">
                            </div>
                            {{--Fin Div Id.Paciente--}}

                            {{--Div ID.Tipo Documento--}}
                            <div class="input-group m-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputGroupSelect01">Tipo Documento
                                    </label>
                                </div>
                                <select name="idtipdoc" class="custom-select" id="inputGroupSelect01">
                                    <option selected>Selecciona Documento</option>
                                    @foreach($tipodoc as $item)
                                        <option value="{{$item->idtipodoc}}">{{$item->nomdoc}}</option>
                                    @endforeach
                                </select>
                            </div>
                            {{--Fin Div Tipo Documento--}}

                            {{--Div Input Numero de Documento--}}
                            <div class="input-group m-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Numero de Documento</span>
                                </div>
                                <input type="text" value="{{$paciente->numdoc}}" class="form-control" placeholder="Numero de Documento"
                                       name="ndoc" aria-describedby="basic-addon1">
                            </div>
                            {{--Fin Div Input Numero de Documento--}}

                            {{--Div Nombre--}}
                            <div class="input-group m-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Nombre</span>
                                </div>
                                <input type="text" value="{{$paciente->nombre}}" class="form-control" placeholder="Nombre" name="nom" aria-describedby="basic-addon1">
                            </div>
                            {{--Fin Div Nombre--}}

                            {{--Div Input Apellido--}}
                            <div class="input-group m-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Apellido</span>
                                </div>
                                <input type="text" value="{{$paciente->apellido}}" class="form-control" placeholder="Apellido"
                                       name="ap" aria-describedby="basic-addon1">
                            </div>
                            {{--Fin Div Input Apellido--}}

                            {{--Div Input Fecha de Nacimiento--}}
                            <div class="input-group m-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Fecha de Nacimiento</span>
                                </div>
                                <input type="date" value="{{$paciente->fechanac}}" class="form-control" placeholder="Fecha de Nacimiento"
                                       name="fechan" aria-describedby="basic-addon1">
                            </div>
                            {{--Fin Div Input Fecha de Nacimiento--}}

                            {{--Div Input Genero--}}
                            <div class="input-group m-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Genero</span>
                                </div>
                                <input type="text" value="{{$paciente->genero}}" class="form-control" placeholder="Genero" name="genro" aria-describedby="basic-addon1">
                            </div>
                            {{--Fin Div Input Genero--}}

                            {{--Div Input Estado Civil--}}
                            <div class="input-group m-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Estado Civil</span>
                                </div>
                                <input type="text" value="{{$paciente->estcivil}}" class="form-control" placeholder="Estado Civil" name="ecivil" aria-describedby="basic-addon1">
                            </div>
                            {{--Fin Div Input Estado Civil--}}

                            {{--Div Input Seguro Social--}}
                            <div class="input-group m-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Seguro Social</span>
                                </div>
                                <input type="text" value="{{$paciente->segsocial}}" class="form-control" placeholder="Seguro Social"
                                       name="ssocial" aria-describedby="basic-addon1">
                            </div>
                            {{--Fin Div Input Seguro Social--}}

                            {{--Div Input Telefono--}}
                            <div class="input-group m-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Telefono</span>
                                </div>
                                <input type="text" value="{{$paciente->tel}}" class="form-control" placeholder="Telefono"
                                       name="telefn" aria-describedby="basic-addon1">
                            </div>
                            {{--Fin Div Input Telefono--}}

                            {{--Div Input Direccion--}}
                            <div class="input-group m-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Direccion Residencia</span>
                                </div>
                                <input type="text" value="{{$paciente->dir}}" class="form-control" placeholder="Direccion"
                                       name="dire" aria-describedby="basic-addon1">
                            </div>
                            {{--Fin Div Input Telefono--}}

                            {{--Div Input Email--}}
                            <div class="input-group m-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Email</span>
                                </div>
                                <input type="text" value="{{$paciente->email}}" class="form-control" placeholder="Email"
                                       name="emil" aria-describedby="basic-addon1">
                            </div>
                            {{--Fin Div Input Email--}}

                        </div>

                        <div class="form-group row">
                            <div class="form-group col-6">
                                <input type="submit" class="btn btn-success form-control" value="Crear Paciente">
                            </div>
                            <div class="form-group col-6">
                                <a class="btn btn-warning form-control" href="{{route('paciente.index')}}">Regresa a Pacientes</a>
                            </div>
                        </div>
                    </form>
                    {{--Fin Formulario--}}
                </div>
            </div>
        </div>
    </div>
@endsection
