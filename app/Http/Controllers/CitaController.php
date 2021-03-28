<?php

namespace App\Http\Controllers;

use App\Models\Auxiliar;
use App\Models\Cita;
use App\Models\Doctor;
use App\Models\Pacientes;
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
        $paciente = Pacientes::all();
        $doctor = Doctor::all();
        $auxiliar = Auxiliar::all();
        return view('cita.create', ['cita' => $cita,
            'paciente'=>$paciente,
            'doctor'=> $doctor,
            'auxiliar'=> $auxiliar
            ]);
    }

    public function store(Request $request, Cita $cita)
    {
        $cita->fecha = $request->feca;
        $cita->descripcion = $request->descrip;
        $cita->id_paciente = $request->idpac;
        $cita->id_doctor = $request->iddoc;
        $cita->id_auxiliar = $request->idaux;
        $cita->save();
        return redirect()->route('cita.show', ['cita'=>$cita]);
    }

    public function show($cita)
    {
        $citas = Cita::find($cita);
        return view('cita.show', ['cita'=>$citas]);
    }

    public function edit($cita)
    {
        $citas = Cita::find($cita);
        return view('cita.edit', ['cita'=> $citas]);
    }

    public function update(Request $request, Cita $cita)
    {
        $citas = Cita::find($cita);
        $citas->fecha = $request->feca;
        $citas->descripcion = $request->descrip;
        $citas->id_paciente = $request->idpac;
        $citas->id_doctor = $request->iddoc;
        $citas->id_auxiliar = $request->idaux;
        $citas->save();
        return redirect()->route('cita.show', ['cita'=>$citas]);
    }

    public function destroy(Cita $cita)
    {
        $cita->delete();
        return redirect()->route('cita.index');
    }
}
