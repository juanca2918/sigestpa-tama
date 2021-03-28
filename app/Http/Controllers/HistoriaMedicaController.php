<?php

namespace App\Http\Controllers;

use App\Models\HistoriaMedica;
use App\Models\Pacientes;
use Illuminate\Http\Request;

class HistoriaMedicaController extends Controller
{
    public function index()
    {
        $paciente = Pacientes::all();
        return view('historiamedica.index', compact('paciente'));
    }

    public function create()
    {
        $paciente = Pacientes::all();
        return view('historiamedica.create', ['paciente' => $paciente]);
    }

    public function store(Request $request, HistoriaMedica $histmed)
    {
        $histmed->id_paciente = $request->ndoc;
        $histmed->nombre = $request->nom;
        $histmed->apellido = $request->ap;
        $histmed->fechanac = $request->fechan;
        $histmed->genero = $request->genro;
        $histmed->estcivil = $request->ecivil;
        $histmed->segsocial = $request->ssocial;
        $histmed->tel = $request->telefn;
        $histmed->dir = $request->dire;
        $histmed->email = $request->emil;
        $histmed->save();
        return redirect()->route('historiamedica.show', $histmed);
    }

    public function show($id)
    {
        $paciente = Pacientes::find($id);
        return view('paciente.show', compact('paciente'));
    }

    public function edit($id)
    {
        $paciente = Pacientes::all();
        $histmed = HistoriaMedica::find($id);
        return view('paciente.edit', ['histmed'=> $histmed, 'paciente'=> $paciente]);
    }

    public function update(Request $request, HistoriaMedica $histmed)
    {
        $histmed = Pacientes::find($id);
        $histmed->idpaciente = $request->idpac;
        $histmed->id_tipodoc = $request->idtipdoc;
        $histmed->numdoc = $request->ndoc;
        $histmed->nombre = $request->nom;
        $histmed->apellido = $request->ap;
        $histmed->fechanac = $request->fechan;
        $histmed->genero = $request->genro;
        $histmed->estcivil = $request->ecivil;
        $histmed->segsocial = $request->ssocial;
        $histmed->tel = $request->telefn;
        $histmed->dir = $request->dire;
        $histmed->email = $request->emil;
        $histmed->save();
        return redirect()->route('paciente.show', $paciente);
    }

    public function destroy(Paciente $paciente)
    {
        $paciente->delete();
        return redirect()->route('paciente.index');
    }
}
