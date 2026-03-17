<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAulaRequest;
use App\Http\Requests\UpdateAulaRequest;
use App\Models\Aula;

class AulaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $todos = Aula::all();
        return view('aulas.index', ['todos'=>$todos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('aulas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAulaRequest $request)
    {
//        echo "aqui voy a guardar lo que viene en el request";
//        @dump($request);
        $datos = $request->all();
//        @dump($datos);
        $nombre = $request->input('nombre');
        $capacidad = $request->input('capacidad');
//        @dump($nombre);
       
        $nueva = new Aula();
/*
        $nueva->nombre = $nombre;
        $nueva->capacidad  = $capacidad;
*/
        $nueva->fill($datos);        
        $nueva->save();

        return redirect('/');

    }

    /**
     * Display the specified resource.
     */
    public function show(Aula $aula) //route model biding
    {
        return view('aulas.show',compact('aula'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Aula $aula)
    {
        return view('aulas.edit',compact('aula'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAulaRequest $request, Aula $aula)
    {
        //echo "actualizar...";
        $aula->fill($request->all());
        $aula->save();
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Aula $aula)
    {
        $aula->delete(); 
        return redirect('/');
    }
}
