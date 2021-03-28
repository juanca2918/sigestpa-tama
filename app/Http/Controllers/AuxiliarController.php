<?php

namespace App\Http\Controllers;

use App\Models\Auxiliar;
use App\Models\Personal;
use Illuminate\Http\Request;

class AuxiliarController extends Controller
{
    public function index()
    {
        $auxiliar = Auxiliar::all();
        return view('cita.index', ['auxiliar'=>$auxiliar]);
    }

    public function create()
    {
        $personal = Personal::all();
        $auxiliar = Auxiliar::all();
        return view('auxiliar.create', ['auxiliar' => $auxiliar, 'personal'=> $personal]);
    }

    public function store(Request $request, Auxiliar $auxiliar)
    {
        $auxiliar -> idauxiliar = $request -> id_auxiliar;
        $auxiliar -> estado = $request -> $request -> estdo;
        $auxiliar->save();
        return redirect()->route('auxiliar.show', ['auxiliar'=>$auxiliar]);
    }

    public function show($auxiliar)
    {
        $auxiliars = Auxiliar::find($auxiliar);
        return view('auxiliar.show', ['auxiliar'=>$auxiliars]);
    }

    public function edit($auxiliar)
    {
        $personal = Personal::all();
        $auxiliars = Auxiliar::find($auxiliar);
        return view('auxiliar.edit', ['auxiliar'=> $auxiliars, 'personal'=>$personal]);
    }

    public function update(Request $request, Auxiliar $auxiliar)
    {
        $auxiliar = Auxiliar::find($auxiliar);
        $auxiliar->estado = $request->estdo;
        $auxiliar->id_personal = $request->idpersonal;
        $auxiliar->save();
        return redirect()->route('auxiliar.show', ['auxiliar'=>$auxiliar]);
    }

    public function destroy(Auxliar $auxiliar)
    {
        $auxiliar->delete();
        return redirect()->route('auxiliar.index');
    }
}
