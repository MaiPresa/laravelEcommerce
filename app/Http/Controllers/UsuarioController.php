<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usuarios = Usuario::all();
        //return view('usuarios.view', compact('usuarios'));  
        return response()->json($usuarios);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return view('usuarios.create);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre_usuarios' => 'required|string|max:255',
            'contrasena' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'telefono' => 'required|string|max:255',
            'direccion' => 'required|string|max:255',
            'ciudad' => 'required|string|max:255', 

        ]);
    
    $usuario = new Usuario ();
    $usuario->id_roles = $request->id_roles;
    $usuario->nombre_usuarios = $request->nombre_usuarios;
    $usuario->contrasena = $request->contrasena;
    $usuario->email = $request->email;
    $usuario->telefono = $request->telefono;
    $usuario->direccion = $request->direccion;
    $usuario->ciudad = $request->ciudad;
    $usuario->fecha_registro = now();

    $usuario->save();

   // return redirect()->route('usuario.index')->with('succes', 'Se ha creado el usuario');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $usuario = Usuario::findorFail($id);
        return response()->json($usuario);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $usuario = Usuario::findOrFail($id);

        //return view('usuario.edit', compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nombre_usuarios' => 'required|string|max:255',
            'contrasena' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'telefono' => 'required|string|max:255',
            'direccion' => 'required|string|max:255',
            'ciudad' => 'required|string|max:255', 

        ]);
    
    $usuario = Usuario::findOrFail($id);
    $usuario->id_roles = $request->id_roles;
    $usuario->nombre_usuarios = $request->nombre_usuarios;
    $usuario->contrasena = $request->contrasena;
    $usuario->email = $request->email;
    $usuario->telefono = $request->telefono;
    $usuario->direccion = $request->direccion;
    $usuario->ciudad = $request->ciudad;
    $usuario->fecha_registro = now();

    $usuario->save();

    return response()->json(['message' => 'Se ha actualizado el usuario']);
    }
    
    /**
     * Remove the specified resource from storage.
     */

    public function destroy(string $id)
    {
        $usuario = Usuario::findOrFail($id);
        $usuario->delete();

        return response()->json(['message' => 'Se ha eliminado el usuario']);
    }

}