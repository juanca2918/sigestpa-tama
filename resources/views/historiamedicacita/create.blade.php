@extends('layouts.app')
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

                            {{--Div ID. Historia Medica Cita--}}
                            <div class="input-group m-3" hidden>
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">ID. Cita</span>
                                </div>
                                <input type="text" name="id_cita" class="form-control" placeholder="ID.Historia Medica Cita" aria-label="ID.Historia Medica Cita"
                                       aria-describedby="basic-addon1">
                            </div>
                            {{--Fin Div ID. Historia Medica Cita--}}

                            {{--Div Input Fecha--}}
                            <div class="input-group m-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Fecha</span>
                                </div>
                                <input type="date" class="form-control" placeholder="Fecha"
                                       name="fech" aria-describedby="basic-addon1">
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

                            {{--Div Historia Medica--}}
                            <div class="input-group m-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputGroupSelect01">ID. Historia Medica
                                    </label>
                                </div>
                                <select name="histme" class="custom-select" id="inputGroupSelect01">
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
                                    <label class="input-group-text" for="inputGroupSelect01">ID. Cita
                                    </label>
                                </div>
                                <select name="idcita" class="custom-select" id="inputGroupSelect01">
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
                            <input type="submit" class="btn btn-success form-control" value="Crear Historia Medica Cita">
                        </div>
                        <div class="form-group col-6">
                            <a class="btn btn-warning form-control" href="{{route('historiamedicacita.index')}}">Regresa a lista Historia Medica Cita</a>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
@endsection
