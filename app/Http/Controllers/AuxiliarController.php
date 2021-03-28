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
        return view('auxiliar.index', ['auxiliar'=>$auxiliar]);
    }

    public function create()
    {
        $personal = Personal::all();
        return view('auxiliar.create', ['personal'=> $personal]);
    }

    public function store(Request $request, Auxiliar $auxiliar)
    {
        $auxiliar -> estado = $request -> estdo;
        $auxiliar -> id_personal = $request -> idper;
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
        $auxiliars = Auxiliar::find($auxiliar);
        $personal = Personal::all();
        return view('auxiliar.edit', ['auxiliar'=> $auxiliars, 'personal'=>$personal]);
    }

    public function update(Request $request, Auxiliar $auxiliar)
    {
        $auxiliars = Auxiliar::find($auxiliar);
        $auxiliars->estado = $request->estdo;
        $auxiliars->id_personal = $request->idper;
        $auxiliars->save();
        return redirect()->route('auxiliar.show', ['auxiliar'=>$auxiliars]);
    }

    public function destroy(Auxliar $auxiliar)
    {
        $auxiliar->delete();
        return redirect()->route('auxiliar.index');
    }
}
