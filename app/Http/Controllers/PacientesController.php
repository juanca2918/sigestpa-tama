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
        return view('paciente.index', compact('paciente'));
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
        return redirect()->route('paciente.show', $paciente);
    }

    public function show($id)
    {
        $paciente = Pacientes::find($id);
        return view('paciente.show', compact('paciente'));
    }

    public function edit($id)
    {
        $tipodoc= TipoDocumento::all();
        $paciente = Pacientes::find($id);
        return view('paciente.edit', compact('paciente', $tipodoc));
    }

    public function update(Request $request, $id)
    {
        $paciente = Pacientes::find($id);
        $paciente->idpaciente = $request->idpac;
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
        return redirect()->route('paciente.show', $paciente);
    }

    public function destroy(Pacientes $paciente)
    {
        $paciente->delete();
        return redirect()->route('paciente.index');
    }
}
