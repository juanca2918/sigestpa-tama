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
        $histmedc -> id_histmed = $request -> histme;
        $histmedc -> id_cita = $request -> idcita;
        $histmedc -> save();
        return redirect()->route('historiamedicacita.show', ['histmedc'=>$histmedc]);
        /*$histmedc = action([HistoriaMedicaCita::class, 'show']);*/
    }

    public function show($histmedc)
    {
        $histmedci= HistoriaMedicaCita::find($histmedc);
        return view('historiamedicacita.show', ['histmedc'=>$histmedci]);
    }

    public function edit($histmedc)
    {
        $histmed = HistoriaMedica::all();
        $cita = Cita::all();
        $histmedci = HistoriaMedicaCita::find($histmedc);
        return view('historiamedicacita.edit', ['histmedc'=> $histmedci,
             'histmed'=>$histmed, 'cita'=>$cita]);
    }

    public function update(Request $request, HistoriaMedicaCita $histmedc)
    {
        $histmedc -> fecha = $request -> fech;
        $histmedc -> descripcion = $request -> descrip;
        $histmedc -> id_histmed = $request -> idhistmedic;
        $histmedc -> id_cita = $request -> idcita;
        $histmedc -> save();
        return redirect()->route('historiamedicacita.show',
            ['histmedc'=>$histmedc]);
    }

    public function destroy(HistoriaMedicaCita $histmedc)
    {
        $histmedc->delete();
        return redirect()->route('historiamedicacita.index');
    }
}
