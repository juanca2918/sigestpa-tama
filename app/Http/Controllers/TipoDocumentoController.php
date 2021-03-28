<?php

namespace App\Http\Controllers;

use App\Models\TipoDocumento;
use Illuminate\Http\Request;
use function Symfony\Component\Translation\t;

class TipoDocumentoController extends Controller
{
    //Inicio metodo Index
    public function index()
    {
        $tipodoc = TipoDocumento::all();
        return view('tipodocumento.index', ['tipodoc'=>$tipodoc]);
    }
    //Fin metodo Index

    //Inicio metodo create
    public function create()
    {
        return view('tipodocumento.create');
    }
    //Fin metodo create

    //Inicio metodo store
    public function store(Request $request, TipoDocumento $tipodoc)
    {
        $tipodoc->nomdoc = $request->nombre_documento;
        $tipodoc->save();
        return redirect()->route('tipodocumento.show', ['tipodoc'=>$tipodoc]);
    }
    //Fin metodo store

    //Inicio metodo show
    public function show($id)
    {
        $tipodoc = TipoDocumento::find($id);
        return view('tipodocumento.show', ['tipodoc'=>$tipodoc]);
    }
    //Fin metodo show

    public function edit($id)
    {
        $tipodoc = TipoDocumento::find($id);
        return view('tipodocumento.edit', ['tipodoc'=>$tipodoc]);
    }

    public function update(Request $request, TipoDocumento $tipodoc)
    {
        $tipodoc -> nomdoc = $request-> nombre_documento;
        $tipodoc->save();
        return redirect()->route('tipodocumento.show', ['tipodoc'=>$tipodoc]);
    }

    public function destroy(TipoDocumento $tipodoc)
    {
        $tipodoc->delete();
        return redirect()->route('tipodocumento.index');
    }
}
