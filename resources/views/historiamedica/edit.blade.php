@extends('layouts.plantilla')
@section('title', 'Actualizar Historia Medica Cita')
@section('content')
    <div class="container min-vh-100 d-flex flex-column justify-content-center align-items-center">
        <div class="shadow-lg p-5 my-3 bg-white rounded w-100">
            <div class="row d-flex flex-column justify-content-center align-items-center">
                <div class="col-md-8">
                    <h3 class="text-center">Actualiza Historia Medica Cita</h3>
                    <form action="{{ route('historiamedicacita.update', $histmed) }}" method="POST">
                        @csrf
                        @method('put')

                        <div class="form-group">

                            {{--Div ID. Historia Medica--}}
                            <div class="input-group m-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">ID. Historia Medica</span>
                                </div>
                                <input type="text" value="{{$histmed->idhistmed}}" name="idhm" class="form-control" placeholder="ID.Historia Medica" aria-label="ID.Historia Medica"
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
                                        <option value="{{$item->id_paciente}}">{{$item->nombre, $item->apellido}}</option>
                                    @endforeach
                                </select>
                            </div>
                            {{--Fin Div ID. Paciente--}}

                            {{--Div Fecha--}}
                            <div class="input-group m-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Fecha</span>
                                </div>
                                <input type="date" value="{{$histmed->fecha}}" class="form-control" placeholder="Fecha" name="feca" aria-describedby="basic-addon1">
                            </div>
                            {{--Fin Div Fecha--}}

                            {{--Div Input Antecedentes--}}
                            <div class="input-group m-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Antecedentes</span>
                                </div>
                                <input type="text" value="{{$histmed->antecedentes}}" class="form-control" placeholder="Antecedentes"
                                       name="antecen" aria-describedby="basic-addon1">
                            </div>
                            {{--Fin Div Input Antecedentes--}}

                            {{--Div Input Alergias--}}
                            <div class="input-group m-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Alergias</span>
                                </div>
                                <input type="date" value="{{$histmed->alergias}}" class="form-control" placeholder="Alergias"
                                       name="alerg" aria-describedby="basic-addon1">
                            </div>
                            {{--Fin Div Input Alergias--}}

                            {{--Div Input Info. Quirurgica--}}
                            <div class="input-group m-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Ocupacion</span>
                                </div>
                                <input type="text" value="{{$histmed->infquirurgica}}" class="form-control" placeholder="Ocupacion"
                                       name="ocupac" aria-describedby="basic-addon1">
                            </div>
                            {{--Fin Div Info. Quirurgica--}}

                            {{--Div Input Ocupacion--}}
                            <div class="input-group m-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Ocupacion</span>
                                </div>
                                <input type="text" value="{{$histmed->ocupacion}}" class="form-control" placeholder="Ocupacion"
                                       name="ocupac" aria-describedby="basic-addon1">
                            </div>
                            {{--Fin Div Input Ocupacion--}}

                        </div>

                        <div class="form-group row">
                            <div class="form-group col-6">
                                <input type="submit" class="btn btn-success form-control" value="Crear Personal">
                            </div>
                            <div class="form-group col-6">
                                <a class="btn btn-warning form-control" href="{{route('historiamedicacita.index')}}">Regresa a Personal</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
