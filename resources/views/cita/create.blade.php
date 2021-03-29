@extends('layouts.app')
@section('title', 'Crear una Cita')
@section('content')
    <div class="container min-vh-100 d-flex flex-column justify-content-center align-items-center">
        <div class="shadow-lg p-5 bg-white rounded w-100">
            <div class="row d-flex flex-column justify-content-center align-items-center">
                <div class="col-md-8">
                <h3 class="text-center">Crear Cita</h3>
                <form action="{{ route('cita.store') }}" method="POST">
                    @csrf
                    @method('post')

                        <div class="form-group">

                            {{--Div ID. Cita--}}
                            <div class="input-group m-3" hidden>
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">ID.</span>
                                </div>
                                <input type="text" name="idcit" class="form-control" placeholder="ID.Cita" aria-label="ID.Cita"
                                       aria-describedby="basic-addon1">
                            </div>
                            {{--Fin Div ID. Cita--}}

                            {{--Div Input Fecha--}}
                            <div class="input-group m-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Fecha</span>
                                </div>
                                <input type="date" class="form-control" placeholder="Fecha"
                                       name="feca" aria-describedby="basic-addon1">
                            </div>
                            {{--Fin Div Input Fecha--}}

                            {{--Div Descripcion--}}
                            <div class="input-group m-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Descripcion</span>
                                </div>
                                <input type="text" class="form-control" placeholder="Descripcion" name="descrip" aria-describedby="basic-addon1">
                            </div>
                            {{--Fin Div Descripcion--}}

                            {{--Div ID. Paciente--}}
                            <div class="input-group m-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputGroupSelect01">ID. Paciente
                                    </label>
                                </div>
                                <select name="idpac" class="custom-select" id="inputGroupSelect01">
                                    <option selected>Selecciona un Paciente</option>
                                    @foreach($paciente as $item)
                                        <option value="{{$item->idpaciente}}">{{$item->nombre}}</option>
                                    @endforeach
                                </select>
                            </div>
                            {{--Fin Div ID. Paciente--}}

                            {{--Div ID. Doctor--}}
                            <div class="input-group m-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputGroupSelect01">ID. Doctor
                                    </label>
                                </div>
                                <select name="iddoc" class="custom-select" id="inputGroupSelect01">
                                    <option selected>Selecciona un Doctor</option>
                                    @foreach($doctor as $item)
                                        <option value="{{$item->iddoctor}}">{{$item->id_personal}}</option>
                                    @endforeach
                                </select>
                            </div>
                            {{--Fin Div ID. Doctor--}}

                            {{--Div ID. Auxiliar--}}
                            <div class="input-group m-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputGroupSelect01">ID. Auxiliar
                                    </label>
                                </div>
                                <select name="idaux" class="custom-select" id="inputGroupSelect01">
                                    <option selected>Selecciona un Auxiliar</option>
                                    @foreach($auxiliar as $item)
                                        <option value="{{$item->idauxiliar}}">{{$item->id_personal}}</option>
                                    @endforeach
                                </select>
                            </div>
                            {{--Fin Div ID. Auxiliar--}}

                        </div>

                    <div class="form-group row">
                        <div class="form-group col-6">
                            <input type="submit" class="btn btn-success form-control" value="Crear Cita">
                        </div>
                        <div class="form-group col-6">
                            <a class="btn btn-warning form-control" href="{{route('historiamedicacita.index')}}">Regresar a Lista Citas</a>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
@endsection
