<?php

namespace App\Http\Controllers;

use App\Models\HistoriaMedicaCita;
use App\Models\Pacientes;
use Illuminate\Http\Request;

class HistoriaMedicaCitaController extends Controller
{
    public function index()
    {
        $histmedc = HistoriaMedicaCita::all();
        return view('historiamedicacita.index', compact('histmedc'));
    }

    public function create()
    {
        $paciente = Pacientes::all();
        $histmedc = historiaMedicaCita::all();
        return view('historiamedicacita', compact('paciente', 'histmedc'));
    }

    public function store(Request $request)
    {
        $histmedc= new historiaMedicaCita;
        $histmedc->detallecita= $request->detalc;
        $histmedc->formula= $request->formula;
        $histmedc->fechacita= $request->fechcit;
        $histmedc->save();
        return redirect()->route('historiamedicacita.show', compact('histmedc'));
    }

    public function show($id)
    {
        $histmedc= historiaMedicaCita::find($id);
        return view('historiamedicacita.show', compact('histmedc'));
    }

    public function edit(HistoriaMedicaCita $historiaMedicaCita)
    {
        $paciente = Pacientes::all();
        $histmedc = historiaMedicaCita::all();
        return view('historiamedicacita', compact('paciente', 'histmedc'));
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy(HistoriaMedicaCita $historiaMedicaCita)
    {
        //
    }
}
