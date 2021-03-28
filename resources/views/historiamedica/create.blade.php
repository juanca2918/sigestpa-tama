@extends('layouts.app')
@section('title', 'Crear Historia Medica')
@section('content')
    <div class="container min-vh-100 d-flex flex-column justify-content-center align-items-center">
        <div class="shadow-lg p-5 bg-white rounded w-100">
            <div class="row d-flex flex-column justify-content-center align-items-center">
                <div class="col-md-8">
                <h3 class="text-center">Crea Historia Medica</h3>
                <form action="{{ route('historiamedica.store') }}" method="POST">
                    @csrf
                    @method('POST')

                        <div class="form-group">

                            {{--Div ID. Historia Medica--}}
                            <div class="input-group m-3" hidden>
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">ID. Historia Medica</span>
                                </div>
                                <input type="text" name="idhm" class="form-control" placeholder="ID.Historia Medica" aria-label="ID.Historia Medica"
                                       aria-describedby="basic-addon1">
                            </div>
                            {{--Fin Div ID. Historia Medica--}}

                            {{--Div ID. Paciente--}}
                            <div class="input-group m-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputGroupSelect01">ID. Paciente
                                    </label>
                                </div>
                                <select name="idpaciente" class="custom-select" id="inputGroupSelect01">
                                    <option selected>Selecciona un Paciente</option>
                                    @foreach($paciente as $item)
                                        <option value="{{$item->idpaciente}}">{{$item->nombre}}</option>
                                    @endforeach
                                </select>
                            </div>
                            {{--Fin Div ID. Paciente--}}

                            {{--Div Fecha--}}
                            <div class="input-group m-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Fecha</span>
                                </div>
                                <input type="date" class="form-control" placeholder="Fecha" name="feca" aria-describedby="basic-addon1" />
                            </div>
                            {{--Fin Div Fecha--}}

                            {{--Div Input Antecedentes--}}
                            <div class="input-group m-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Antecedentes</span>
                                </div>
                                <input type="text" class="form-control" placeholder="Antecedentes"
                                       name="antecen" aria-describedby="basic-addon1">
                            </div>
                            {{--Fin Div Input Antecedentes--}}

                            {{--Div Input Alergias--}}
                            <div class="input-group m-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Alergias</span>
                                </div>
                                <input type="text" class="form-control" placeholder="Alergias"
                                       name="alerg" aria-describedby="basic-addon1">
                            </div>
                            {{--Fin Div Input Alergias--}}

                            {{--Div Input Info. Quirurgica--}}
                            <div class="input-group m-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Info. Quirurgica</span>
                                </div>
                                <input type="text" class="form-control" placeholder="Info. Quirurgica"
                                       name="infq" aria-describedby="basic-addon1">
                            </div>
                            {{--Fin Div Info. Quirurgica--}}

                            {{--Div Input Ocupacion--}}
                            <div class="input-group m-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Ocupacion</span>
                                </div>
                                <input type="text" class="form-control" placeholder="Ocupacion"
                                       name="ocupac" aria-describedby="basic-addon1">
                            </div>
                            {{--Fin Div Input Ocupacion--}}

                        </div>

                    <div class="form-group row">
                        <div class="form-group col-6">
                            <input type="submit" class="btn btn-success form-control" value="Crear Historia Medica">
                        </div>
                        <div class="form-group col-6">
                            <a class="btn btn-warning form-control" href="{{route('historiamedica.index')}}">Regresa a Lista Historial Medico</a>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
@endsection
