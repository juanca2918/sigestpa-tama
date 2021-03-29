<?php

namespace App\Http\Controllers;

use App\Models\HistoriaMedica;
use App\Models\Pacientes;
use Illuminate\Http\Request;

class HistoriaMedicaController extends Controller
{
    public function index()
    {
        $histmed = HistoriaMedica::all();
        $paciente = Pacientes::all();
        return view('historiamedica.index', ['histmed'=>$histmed, 'paciente'=>$paciente]);
    }

    public function create()
    {
        $paciente = Pacientes::all();
        return view('historiamedica.create', ['paciente' => $paciente]);
    }

    public function store(Request $request, HistoriaMedica $histmed)
    {
        $histmed->id_paciente = $request->idpaciente;
        $histmed->fecha = $request->feca;
        $histmed->antecedentes = $request->antecen;
        $histmed->alergias = $request->alerg;
        $histmed->infquirurgica = $request->infq;
        $histmed->ocupacion = $request->ocupac;
        $histmed->save();
        return redirect()->route('historiamedica.show', ['histmed'=>$histmed]);
    }

    public function show($histmed)
    {
        $histmedi = HistoriaMedica::find($histmed);
        return view('historiamedica.show', ['histmed'=>$histmedi]);
    }

    public function edit($histmed)
    {
        $paciente = Pacientes::all();
        $histmedi = HistoriaMedica::find($histmed);
        return view('historiamedica.edit',
            ['histmed'=> $histmedi,
                'paciente'=> $paciente]);
    }

    public function update(Request $request, HistoriaMedica $histmed)
    {
        $histmed->id_paciente = $request->idpaciente;
        $histmed->fecha = $request->feca;
        $histmed->antecedentes = $request->antecen;
        $histmed->alergias = $request->alerg;
        $histmed->infquirurgica = $request->infq;
        $histmed->ocupacion = $request->ocupac;
        $histmed->save();
        return redirect()->route('historiamedica.show', ['histmed'=>$histmed]);
    }

    public function destroy(HistoriaMedica $histmed)
    {
        $histmed->delete();
        return redirect()->route('historiamedica.index');
    }
}
