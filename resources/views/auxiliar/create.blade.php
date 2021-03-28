@extends('layouts.app')
@section('title', 'Crear Auxiliar')
@section('content')
    <div class="container min-vh-100 d-flex flex-column justify-content-center align-items-center">
        <div class="shadow-lg p-5 bg-white rounded w-100">
            <div class="row d-flex flex-column justify-content-center align-items-center">
                <div class="col-md-8">
                <h3 class="text-center">Crear Auxiliar</h3>
                <form action="{{ route('auxiliar.store') }}" method="POST">
                    @csrf
                    @method('post')

                        <div class="form-group">

                            {{--Div ID. Auxiliar--}}
                            <div class="input-group m-3" hidden>
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">ID. Auxiliar</span>
                                </div>
                                <input type="text" name="id_auxiliar" class="form-control" placeholder="ID.Auxiliar" aria-label="ID.Auxiliar"
                                       aria-describedby="basic-addon1">
                            </div>
                            {{--Fin Div ID. Auxiliar--}}

                            {{--Div Input Estado--}}
                            <div class="input-group m-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Estado</span>
                                </div>
                                <input type="text" class="form-control" placeholder="Estado"
                                       name="estdo" aria-label="Estado" aria-describedby="basic-addon1">
                            </div>
                            {{--Fin Div Input Estadoa--}}

                            {{--Div ID. PERSONAL--}}
                            <div class="input-group m-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputGroupSelect01">ID. Personal
                                    </label>
                                </div>
                                <select name="idper" class="custom-select" id="inputGroupSelect01">
                                    <option selected>Selecciona un Personal</option>
                                    @foreach($personal as $item)
                                        <option value="{{$item->idpersonal}}">{{$item->idpersonal}}</option>
                                    @endforeach
                                </select>
                            </div>
                            {{--Fin Div ID. PERSONAL--}}

                        </div>

                    <div class="form-group row">
                        <div class="form-group col-6">
                            <input type="submit" class="btn btn-success form-control" value="Crear Personal">
                        </div>
                        <div class="form-group col-6">
                            <a class="btn btn-warning form-control" href="{{route('auxiliar.index')}}">Regresa a Lista Auxiliares</a>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
@endsection
