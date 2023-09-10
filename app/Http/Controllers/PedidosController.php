<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pedidos = Pedido::all();
        return response()->json($pedidos);
    }

    public function create()
    {
        // return view('usuarios.create);
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_usuario' => 'required|integer',
            'fecha_pedido' => 'required|date',
            'precio_total' => 'required|numeric',
            'estado' => 'required|in:enviado,preparando,entregado,cancelado',
        ]);
    
        $pedido = new Pedido();
        $pedido->id_usuario = $request->id_usuario;
        $pedido->fecha_pedido = $request->fecha_pedido;
        $pedido->precio_total = $request->precio_total;
        $pedido->estado = $request->estado;

        $pedido->save();

        // return redirect()->route('usuario.index')->with('succes', 'Se ha creado el usuario');
    }

    public function show(string $id)
    {
        $pedido = Pedido::findOrFail($id);
        return response()->json($pedido);
    }

    public function edit(string $id)
    {
        $pedido = Pedido::findOrFail($id);
        // return view('usuario.edit', compact('usuario'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'id_usuario' => 'required|integer',
            'fecha_pedido' => 'required|date',
            'precio_total' => 'required|numeric',
            'estado' => 'required|in:enviado,preparando,entregado,cancelado',
        ]);
    
        $pedido = Pedido::findOrFail($id);
        $pedido->id_usuario = $request->id_usuario;
        $pedido->fecha_pedido = $request->fecha_pedido;
        $pedido->precio_total = $request->precio_total;
        $pedido->estado = $request->estado;

        $pedido->save();

        return response()->json(['message' => 'Pedido actualizado correctamente']);
    }

    public function destroy(string $id)
    {
        $pedido = Pedido::findOrFail($id);
        $pedido->delete();

        return response()->json(['message' => 'Pedido eliminado correctamente']);
    }
}