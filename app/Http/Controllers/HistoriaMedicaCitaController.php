<?php

namespace App\Http\Controllers;

use App\Models\Cita;
use App\Models\HistoriaMedica;
use App\Models\HistoriaMedicaCita;
use Illuminate\Http\Request;

class HistoriaMedicaCitaController extends Controller
{
    public function index()
    {
        $histmedc = HistoriaMedicaCita::all();
        return view('historiamedicacita.index', ['histmedc'=>$histmedc]);
    }

    public function create()
    {
        $histmed = HistoriaMedica::all();
        $cita = Cita::all();
        return view('historiamedicacita.create', ['histmed'=>$histmed, 'cita'=>$cita]);
    }

    public function store(Request $request, HistoriaMedicaCita $histmedc)
    {
        $histmedc -> fecha = $request -> fech;
        $histmedc -> descripcion = $request -> descrip;
        $histmedc -> id_histmed = $request -> idhistmed;
        $histmedc -> id_cita = $request -> idcita;
        $histmedc -> save();
        return redirect()->route('historiamedicacita.show', ['histmedc'=>$histmedc]);
    }

    public function show($histmedc)
    {
        $histmedci= historiaMedicaCita::find($histmedc);
        return view('historiamedicacita.show', ['histmedc'=>$histmedci]);
    }

    public function edit($histmedc)
    {
        $histmedci = HistoriaMedicaCita::find($histmedc);
        return view('historiamedicacita', ['histmedc'=> $histmedci]);
    }

    public function update(Request $request, HistoriaMedicaCita $histmedc)
    {
        $histmedci = HistoriaMedicaCita::find($histmedc);
        $histmedci -> fecha = $request -> fech;
        $histmedci -> descripcion = $request -> descrip;
        $histmedci -> id_histmed = $request -> idhistmed;
        $histmedci -> id_cita = $request -> idcita;
        $histmedci -> save();
        return redirect()->route('historiamedicacita.show', ['histmedc'=>$histmedci]);
    }

    public function destroy(HistoriaMedicaCita $histmedc)
    {
        $histmedc->delete();
        return redirect()->route('historiamedicacita.index');
    }
}
