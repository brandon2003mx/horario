<?php

namespace App\Http\Controllers;

use App\Models\Edificio;
use Illuminate\Http\Request;

class EdificioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Edificio::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $edificio = Edificio::create([
            'nombre' => $request->nombre
        ]);

        return response()->json($edificio, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $edificio = Edificio::with('aulas')->find($id);
        return response()->json($edificio);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $edificio = Edificio::find($id);
        $edificio->update([
            'nombre' => $request->nombre
        ]);

        return response()->json($edificio);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $edificio = Edificio::find($id);
        $edificio->delete();

        return response()->json(['mensaje' => 'Edificio eliminado']);
    }
}