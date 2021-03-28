<?php

namespace App\Http\Controllers;

use App\Models\Cita;
use Illuminate\Http\Request;

class CitaController extends Controller
{
    public function index()
    {
        $cita = Cita::all();
        return view('cita.index', ['cita'=>$cita]);
    }

    public function create()
    {
        $cita = Cita::all();
        return view('doctor.create', ['cita' => $cita]);
    }

    public function store(Request $request, Cita $cita)
    {
        $cita->idcita = $request->estdo;
        $cita->fecha = $request->idpersonal;
        $cita->descripcion = $request->idpersonal;
        $cita->id_paciente = $request->idpersonal;
        $cita->id_doctor = $request->idpersonal;
        $cita->id_auxiliar = $request->idpersonal;
        $cita->save();
        return redirect()->route('doctor.show', ['cita'=>$cita]);
    }

    public function show($cita)
    {
        $citas = Cita::find($cita);
        return view('cita.show', ['cita'=>$citas]);
    }

    public function edit($cita)
    {
        $cita->fecha = $request->idpersonal;
        $cita->descripcion = $request->idpersonal;
        $cita->id_paciente = $request->idpersonal;
        $cita->id_doctor = $request->idpersonal;
        $cita->id_auxiliar = $request->idpersonal;
        $cita->save();
        return view('cita.edit', ['cita'=> $cita]);
    }

    public function update(Request $request, Cita $cita)
    {
        $citas = Cita::find($cita);
        $citas->fecha = $request->idpersonal;
        $citas->descripcion = $request->idpersonal;
        $citas->id_paciente = $request->idpersonal;
        $citas->id_doctor = $request->idpersonal;
        $citas->id_auxiliar = $request->idpersonal;
        $citas->save();
        return redirect()->route('doctor.show', ['cita'=>$citas]);
    }

    public function destroy(Cita $cita)
    {
        $cita->delete();
        return redirect()->route('doctor.index');
    }
}
