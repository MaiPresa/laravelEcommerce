<?php

namespace App\Http\Controllers;

use App\Models\Plato;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PlatoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $platos = Plato::all();
        return response()->json($platos);
    }

    /**
     * Store a newly created resource in storage.
     */

    public function create()
    {
        //return view('usuarios.create);
    } 

    public function store(Request $request)
    {
        $request->validate([
            'id_categoria' => 'required|integer',
            'nombre_plato' => 'required|string|max:255',
            'descripcion' => 'required|string|max:1000',
            'precio' => 'required|numeric',
            'imagen' => 'required|string|max:255',
        ]);
    
        $plato = new Plato();
        $plato->id_categoria = $request->id_categoria;
        $plato->nombre_plato = $request->nombre_plato;
        $plato->descripcion = $request->descripcion;
        $plato->precio = $request->precio;
        $plato->imagen = $request->imagen;

        $plato->save();

        return response()->json(['message' => 'Se ha creado el plato']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $plato = Plato::findOrFail($id);
        return response()->json($plato);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'id_categoria' => 'required|integer',
            'nombre_plato' => 'required|string|max:255',
            'descripcion' => 'required|string|max:1000',
            'precio' => 'required|numeric',
            'imagen' => 'required|string|max:255',
        ]);
    
        $plato = Plato::findOrFail($id);
        $plato->id_categoria = $request->id_categoria;
        $plato->nombre_plato = $request->nombre_plato;
        $plato->descripcion = $request->descripcion;
        $plato->precio = $request->precio;
        $plato->imagen = $request->imagen;

        $plato->save();

        return response()->json(['message' => 'Se ha actualizado el plato']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $plato = Plato::findOrFail($id);
        $plato->delete();

        return response()->json(['message' => 'Se ha eliminado el plato']);
    }
}
