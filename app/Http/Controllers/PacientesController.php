<?php

namespace App\Http\Controllers;

use App\Models\Pacientes;
use App\Models\TipoDocumento;
use Illuminate\Http\Request;

class PacientesController extends Controller
{
    public function index()
    {
        $paciente = Pacientes::all();
        return view('paciente.index', ['paciente'=>$paciente]);
    }

    public function create()
    {
        $tipodoc = TipoDocumento::all();
        return view('paciente.create', compact('tipodoc'));
    }

    public function store(Request $request, Pacientes $paciente)
    {
        $paciente->id_tipodoc = $request->idtipdoc;
        $paciente->numdoc = $request->ndoc;
        $paciente->nombre = $request->nom;
        $paciente->apellido = $request->ap;
        $paciente->fechanac = $request->fechan;
        $paciente->genero = $request->genro;
        $paciente->estcivil = $request->ecivil;
        $paciente->segsocial = $request->ssocial;
        $paciente->tel = $request->telefn;
        $paciente->dir = $request->dire;
        $paciente->email = $request->emil;
        $paciente->save();
        return redirect()->route('paciente.show', ['paciente'=>$paciente]);
    }

    public function show($paciente)
    {
        $pacientes = Pacientes::find($paciente);
        return view('paciente.show', ['paciente'=>$pacientes]);
    }

    public function edit($paciente)
    {
        $tipodoc= TipoDocumento::all();
        $pacientes = Pacientes::find($paciente);
        return view('paciente.edit', ['tipodoc'=>$tipodoc, 'paciente'=>$pacientes]);
    }

    public function update(Request $request, Paciente $paciente)
    {
        $pacientes = Pacientes::find($paciente);
        $pacientes->idpaciente = $request->idpac;
        $pacientes->id_tipodoc = $request->idtipdoc;
        $pacientes->numdoc = $request->ndoc;
        $pacientes->nombre = $request->nom;
        $pacientes->apellido = $request->ap;
        $pacientes->fechanac = $request->fechan;
        $pacientes->genero = $request->genro;
        $pacientes->estcivil = $request->ecivil;
        $pacientes->segsocial = $request->ssocial;
        $pacientes->tel = $request->telefn;
        $pacientes->dir = $request->dire;
        $pacientes->email = $request->emil;
        $pacientes->save();
        return redirect()->route('paciente.show', ['paciente'=>$pacientes]);
    }

    public function destroy(Pacientes $paciente)
    {
        $paciente->delete();
        return redirect()->route('paciente.index');
    }
}
