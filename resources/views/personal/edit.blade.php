@extends('layouts.app')
@section('title', 'Actualizar Personal')
@section('content')
    <div class="container min-vh-100 d-flex flex-column justify-content-center align-items-center">
        <div class="shadow-lg p-5 my-3 bg-white rounded w-100">
            <div class="row d-flex flex-column justify-content-center align-items-center">
                <div class="col-md-8">
                    <h3 class="text-center">Actualizar Personal</h3>
                    <form action="{{ route('personal.update', $personal) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            {{--Div Id.Personal--}}
                            <div class="input-group m-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">ID. Personal</span>
                                </div>
                                <input type="text" value="{{$personal->idpersonal}}" name="idpers" class="form-control" placeholder="ID.Personal" aria-label="Id.Personal"
                                       aria-describedby="basic-addon1" readonly>
                            </div>
                            {{--Fin Div Id.Personal--}}

                            {{--Div Tipo Documento--}}
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

                            {{--Div Usuario--}}
                            <div class="input-group m-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputGroupSelect01">Usuario
                                    </label>
                                </div>
                                <select name="idusuario" class="custom-select" id="inputGroupSelect01">
                                    <option selected>Selecciona Usuario</option>
                                    @foreach($user as $item)
                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            {{--Fin Div Usuario--}}

                            {{--Div Input Numero de Documento--}}
                            <div class="input-group m-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Numero de Documento</span>
                                </div>
                                <input type="text" class="form-control" placeholder="Numero de Documento"
                                       name="numerodoc" value="{{$personal->numdoc}}" aria-describedby="basic-addon1">
                            </div>
                            {{--Fin Div Input Numero de Documento--}}

                            {{--Div Telefono--}}
                            <div class="input-group m-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Telefono</span>
                                </div>
                                <input type="text" name="telefono" value="{{$personal->tel}}" class="form-control" placeholder="Numero de Documento" name="telefono" aria-describedby="basic-addon1">
                            </div>
                            {{--Fin Div Telefono--}}

                            {{--Div Input fecha nacimiento--}}
                            <div class="input-group m-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Fecha Nacimiento</span>
                                </div>
                                <input type="date" value="{{$personal->fechanac}}" class="form-control" placeholder="Fecha de Nacimiento"
                                       name="fechanaci" aria-describedby="basic-addon1">
                            </div>
                            {{--Fin Div Input fecha nacimiento--}}

                            {{--Div Input Genero--}}
                            <div class="input-group m-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Genero</span>
                                </div>
                                <input type="text" value="{{$personal->genero}}" class="form-control" placeholder="Genero"
                                       name="genro" aria-describedby="basic-addon1">
                            </div>
                            {{--Fin Div Input Genero--}}

                            {{--Div Input estado civil--}}
                            <div class="input-group m-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Estado Civil</span>
                                </div>
                                <input type="text" value="estacivil" value="{{$personal->estcivil}}" class="form-control" placeholder="Estado Civil" name="estacivil" aria-describedby="basic-addon1">
                            </div>
                            {{--Fin Div Input estado civil--}}

                            {{--Div Input seguro social--}}
                            <div class="input-group m-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Seguro Social</span>
                                </div>
                                <input type="text" name="segusocial" value="{{$personal->segsocial}}" class="form-control" placeholder="Seguro Social" name="numerodoc" aria-describedby="basic-addon1">
                            </div>
                            {{--Fin Div Input Seguro Social--}}

                            {{--Div Input Direccion--}}
                            <div class="input-group m-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Direccion Residencia</span>
                                </div>
                                <input type="text" value="{{$personal->dir}}" class="form-control" placeholder="Numero de Documento"
                                       name="dire" aria-describedby="basic-addon1">
                            </div>
                            {{--Fin Div Input Direccion--}}

                        </div>

                        <div class="form-group row">
                            <div class="form-group col-6">
                                <input type="submit" class="btn btn-success form-control" value="Actualizar Personal">
                            </div>
                            <div class="form-group col-6">
                                <a class="btn btn-warning form-control" href="{{route('personal.index')}}">Regresa a Personal</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
