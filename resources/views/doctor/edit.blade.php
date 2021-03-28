@extends('layouts.app')
@section('title', 'Actualizar Historia Medica Cita')
@section('content')
    <div class="container min-vh-100 d-flex flex-column justify-content-center align-items-center">
        <div class="shadow-lg p-5 my-3 bg-white rounded w-100">
            <div class="row d-flex flex-column justify-content-center align-items-center">
                <div class="col-md-8">
                    <h3 class="text-center">Actualizar Doctor</h3>
                    <form action="{{ route('doctor.store') }}" method="POST">
                        @csrf
                        @method('put')

                        <div class="form-group">

                            {{--Div ID. Doctor--}}
                            <div class="input-group m-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">ID. Doctor</span>
                                </div>
                                <input type="text" value="{{$doctor->iddoctor}}" name="iddoct" class="form-control" placeholder="ID. Doctor" aria-label="ID. Doctor"
                                       aria-describedby="basic-addon1" readonly>
                            </div>
                            {{--Fin Div ID. Doctor--}}

                            {{--Div Input Estado--}}
                            <div class="input-group m-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Estado</span>
                                </div>
                                <input type="text" value="{{$doctor->estado}}" class="form-control" placeholder="Estado"
                                       name="estdo" aria-label="Estado" aria-describedby="basic-addon1">
                            </div>
                            {{--Fin Div Input Estado--}}

                            {{--Div ID. Personal--}}
                            <div class="input-group m-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputGroupSelect01">ID. Paciente
                                    </label>
                                </div>
                                <select name="idpersonal" class="custom-select" id="inputGroupSelect01">
                                    <option selected>Selecciona un Personal</option>
                                    @foreach($personal as $item)
                                        <option value="{{$item->idpersonal}}">{{$item->idpersonal}}</option>
                                    @endforeach
                                </select>
                            </div>
                            {{--Fin Div ID. Personal--}}

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
