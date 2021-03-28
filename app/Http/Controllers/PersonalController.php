<?php

namespace App\Http\Controllers;

use App\Models\Personal;
use App\Models\TipoDocumento;
use App\Models\User;
use Illuminate\Http\Request;

class PersonalController extends Controller
{
    public function index()
    {
        $personal = Personal::all();
        return view('personal.index', compact('personal'));
    }

    public function create()
    {
        $personal = TipoDocumento::all();
        $user = User::all();
        return view('personal.create', ['personal'=>$personal, 'user'=>$user]);
    }

    public function store(Request $request, Personal $personal)
    {
        $personal->id_tipodocumento = $request->idtipdoc;
        $personal->id_user = $request->idusuario;
        $personal->numdoc = $request->numerodoc;
        $personal->tel = $request->telefono;
        $personal->fechanac = $request->fechanaci;
        $personal->genero = $request->genro;
        $personal->estcivil = $request->estacivil;
        $personal->segsocial = $request->segusocial;
        $personal->dir = $request->dire;
        $personal->save();
        return redirect()->route('personal.show', ['personal'=>$personal]);
    }

    public function show($personal)
    {
        $personale = Personal::find($personal);
        return view('personal.show', ['personal'=>$personale]);
    }

    public function edit($personal)
    {
        $tipodoc=TipoDocumento::all();
        $user= User::all();
        $personale = Personal::find($personal);
        return view('personal.edit', ['tipodoc'=> $tipodoc, 'user'=> $user , 'personal'=> $personale]);
    }

    public function update(Request $request, Personal $personal)
    {
        $personal-> id_tipodocumento = $request->idtipdoc;
        $personal->id_user = $request->idusuario;
        $personal->numdoc = $request->numerodoc;
        $personal->tel = $request->telefono;
        $personal->fechanac = $request->fechanaci;
        $personal->genero = $request->genro;
        $personal->estcivil = $request->estacivil;
        $personal->segsocial = $request->segusocial;
        $personal->dir = $request->dire;
        $personal->save();
        return redirect()->route('personal.show', ['personal'=>$personal]);
    }

    public function destroy(Personal $personal)
    {
        $personal->delete();
        return redirect()->route('personal.index');
    }
}
