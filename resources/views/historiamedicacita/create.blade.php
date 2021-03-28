@extends('layouts.plantilla')
@section('title', 'Crea una Historia Medica Cita')
@section('content')
    <div class="container min-vh-100 d-flex flex-column justify-content-center align-items-center">
        <div class="shadow-lg p-5 bg-white rounded w-100">
            <div class="row d-flex flex-column justify-content-center align-items-center">
                <div class="col-md-8">
                <h3 class="text-center">Crea Historia Medica Cita</h3>
                <form action="{{ route('historiamedicacita.store') }}" method="POST">
                    @csrf
                    @method('post')

                        <div class="form-group">

                            {{--Div Historia Medica Cita--}}
                            <div class="input-group m-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">ID.</span>
                                </div>
                                <input type="text" name="idhm" class="form-control" placeholder="ID.Historia Medica Cita" aria-label="Id.Personal"
                                       aria-describedby="basic-addon1">
                            </div>
                            {{--Fin Div Historia Medica Cita--}}

                            {{--Div Input Detalle Cita--}}
                            <div class="input-group m-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Detalle Cita</span>
                                </div>
                                <input type="text" class="form-control" placeholder="Detalle Cita"
                                       name="detalc" aria-describedby="basic-addon1">
                            </div>
                            {{--Fin Div Input Detalle Cita--}}

                            {{--Div Formula--}}
                            <div class="input-group m-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Formula</span>
                                </div>
                                <input type="text" class="form-control" placeholder="Formula" name="frmula" aria-describedby="basic-addon1">
                            </div>
                            {{--Fin Div Formula--}}

                            {{--Div Input Fecha Cita--}}
                            <div class="input-group m-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Fecha Nacimiento</span>
                                </div>
                                <input type="date" class="form-control" placeholder="Fecha Cita"
                                       name="fechcit" aria-describedby="basic-addon1">
                            </div>
                            {{--Fin Div Input Fecha Cita--}}

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
