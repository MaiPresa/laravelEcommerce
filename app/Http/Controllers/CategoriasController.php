<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoriasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categorias = Categoria::all();
        // return view('roles.index', compact('roles') ); // -> envia un array con todos los roles a la vista roles.index
        return response()->json($categorias); // -> devuelve un json 

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return view('roles.create'); -> devuelve una vista al formulario que "recoge" los datos para su posterior tratamiento (store)
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([ // array asociativo que recibe gracias al formulario
            'nombre_categoria' => 'required|string|max:255|unique:categorias',  // validación de los datos del campo o campos
        ]);

        $categoria = new Categoria; // instancio el la clase rol y creo un nuevo objeto ()
        $categoria->nombre_categoria = $request->nombre_categoria;

        $categoria->save(); // guardo esa instancia en la tabla de la bbdd

        //return redirect()->route('DONDELOQUERAMOSMANDAR')->with('success', 'Nuevo rol creado'); // página con mensaje de éxito

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $categoria = Categoria::findOrFail($id); // Encuentra o ¡MUERE! Si muere, muestra generalmente error 404 ("no encontrado")

        return response()->json($categoria);

        //return view('roles.show', compact('rol')); // Retorno a la vista roles.show - envío los datos en la vble (objeto) rol

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $rcategoria = Categoria::findOrFail($id); // buscamos el rol

        // if(!$rol) {
        //     return redirect()->route('roles.index')->with('error', 'No se encuentra este Rol.'); // sino existe, mostramos error
        // }

        return view('categorias.edit', compact('categoria')); //mandamos el rol a la vista editar, un formulario prellenado con los datos a modificar (luego se guardarían con update)
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nombre_categorias' => 'required|string|max:255' // validación del campo
        ]);

        $categoria = Categoria::find($id); // busco el rol por id y lo almaceno en la vble rol
        if (!$categoria){
            return redirect()->route('categoria.index')->with('error', 'No se encuentra esta Categoria'); 
        }

        $categoria->nombre_categorias = $request->nombre_categorias; // actualizo los datos del objeto en el atributo indicado
        $categoria->save();

        return redirect()->route('categorias.index')->with('success', 'Se ha actualizado la Categoria');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $categoria = Categoria::find($id); //buscamos la id

        if (!$categoria){
            return redirect()->route('categorias.index')->with('error', 'No se ha encontrado esta Categoria'); //verificamos si existe, sino lanzamos error
        }

        $categoria->delete(); // si exite lo borramos

        return redirect()->route('categorias.index')->with('success', 'Se ha eliminado la Categoria'); //redirigimos al index al usuario (lista de roles, con un mensaje de éxito
    }
}