@extends('layouts.app')
@section('title', 'Actualizar Historia Medica Cita')
@section('content')
    <div class="container min-vh-100 d-flex flex-column justify-content-center align-items-center">
        <div class="shadow-lg p-5 my-3 bg-white rounded w-100">
            <div class="row d-flex flex-column justify-content-center align-items-center">
                <div class="col-md-8">
                    <h3 class="text-center">Actualiza Historia Medica Cita</h3>
                    <form action="{{ route('historiamedicacita.update') }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group">

                            {{--Div ID. Historia Medica Cita--}}
                            <div class="input-group m-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">ID. Cita</span>
                                </div>
                                <input type="text" value="{{$histmedc->icita}}" name="id_cita" class="form-control" placeholder="ID.Historia Medica Cita" aria-label="ID.Historia Medica Cita"
                                       aria-describedby="basic-addon1" readonly>
                            </div>
                            {{--Fin Div ID. Historia Medica Cita--}}

                            {{--Div Input Fecha--}}
                            <div class="input-group m-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Fecha</span>
                                </div>
                                <input type="date" value="{{$histmedc->fecha}}" class="form-control" placeholder="Fecha"
                                       name="fech" aria-describedby="basic-addon1">
                            </div>
                            {{--Fin Div Input Fecha--}}

                            {{--Div Descripcion--}}
                            <div class="input-group m-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Formula</span>
                                </div>
                                <input type="text" value="{{$histmedc->descripcion}}}" class="form-control" placeholder="Descripcion" name="descrip" aria-describedby="basic-addon1">
                            </div>
                            {{--Fin Div Descripcion--}}

                            {{--Div Historia Medica--}}
                            <div class="input-group m-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputGroupSelect01">ID. Historia Medica
                                    </label>
                                </div>
                                <select name="idhistmed" class="custom-select" id="inputGroupSelect01">
                                    <option selected>Selecciona Historia Medica</option>
                                    @foreach($histmed as $item)
                                        <option value="{{$item->idhistmed}}">{{$item->idhistmed}}</option>
                                    @endforeach
                                </select>
                            </div>
                            {{--Fin Div Historia Medica--}}

                            {{--Div ID. Cita--}}
                            <div class="input-group m-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputGroupSelect01">ID. Historia Medica
                                    </label>
                                </div>
                                <select name="idcit" class="custom-select" id="inputGroupSelect01">
                                    <option selected>Selecciona Cita</option>
                                    @foreach($cita as $item)
                                        <option value="{{$item->idcita}}">{{$item->idcita}}</option>
                                    @endforeach
                                </select>
                            </div>
                            {{--Fin Div ID. Cita--}}

                        </div>

                        <div class="form-group row">
                            <div class="form-group col-6">
                                <input type="submit" class="btn btn-success form-control" value="Actualizar Historia Medica Cita">
                            </div>
                            <div class="form-group col-6">
                                <a class="btn btn-warning form-control" href="{{route('historiamedicacita.index')}}">Regresa Lista Historia Medica Cita</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
