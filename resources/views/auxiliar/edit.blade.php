@extends('layouts.plantilla')
@section('title', 'Actualizar Historia Medica Cita')
@section('content')
    <div class="container min-vh-100 d-flex flex-column justify-content-center align-items-center">
        <div class="shadow-lg p-5 my-3 bg-white rounded w-100">
            <div class="row d-flex flex-column justify-content-center align-items-center">
                <div class="col-md-8">
                    <h3 class="text-center">Actualiza Historia Medica Cita</h3>
                    <form action="{{ route('historiamedicacita.store') }}" method="POST">
                        @csrf
                        @method('put')

                        <div class="form-group">

                            {{--Div Historia Medica Cita--}}
                            <div class="input-group m-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"></span>
                                </div>
                                <input type="text" value="{{$paciente->idtipdoc}}" name="idhm" class="form-control" placeholder="ID.Historia Medica Cita" aria-label="ID.Historia Medica Cita"
                                       aria-describedby="basic-addon1">
                            </div>
                            {{--Fin Div Historia Medica Cita--}}

                            {{--Div Input Detalle Cita--}}
                            <div class="input-group m-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Detalle Cita</span>
                                </div>
                                <input type="text" value="{{$paciente->detallecita}}" class="form-control" placeholder="Detalle Cita"
                                       name="detalc" aria-label="ID.Detalle Cita" aria-describedby="basic-addon1">
                            </div>
                            {{--Fin Div Input Detalle Cita--}}

                            {{--Div Formula--}}
                            <div class="input-group m-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Formula</span>
                                </div>
                                <input type="text" value="{{$hismedc->formula}}" name="formula" class="form-control" placeholder="Formula" name="frmula" aria-label="ID.Historia Medica Cita" aria-describedby="basic-addon1">
                            </div>
                            {{--Fin Div Formula--}}

                            {{--Div Input Fecha Cita--}}
                            <div class="input-group m-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Fecha Cita</span>
                                </div>
                                <input type="date" value="{{$histmedc->fechacita}}" class="form-control" placeholder="Fecha Cita"
                                       name="fechcit" aria-label="Fecha Cita" aria-describedby="basic-addon1">
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
