<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Personal;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index()
    {
        $doctor = Doctor::all();
        return view('doctor.index', ['doctor'=>$doctor]);
    }

    public function create()
    {
        $doctor = Personal::all();
        return view('doctor.create', ['doctor' => $doctor]);
    }

    public function store(Request $request, Doctor $doctor)
    {
        $doctor->estado = $request->estdo;
        $doctor->id_personal = $request->idpersonal;
        $doctor->save();
        return redirect()->route('doctor.show', ['doctor'=>$doctor]);
    }

    public function show($doctor)
    {
        $doctors = Doctor::find($doctor);
        return view('doctor.show', ['doctor'=>$doctors]);
    }

    public function edit($doctor)
    {
        $doctors = Doctor::find($doctor);
        return view('doctor.edit', ['doctor'=> $doctors]);
    }

    public function update(Request $request, Doctor $doctor)
    {
        $doctors = Doctor::find($doctor);
        $doctors->estado = $request->estdo;
        $doctors->id_personal = $request->idpersonal;
        $doctors->save();
        return redirect()->route('doctor.show', ['doctor'=>$doctors]);
    }

    public function destroy(Doctor $doctor)
    {
        $doctor->delete();
        return redirect()->route('doctor.index');
    }
}
