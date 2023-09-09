<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plato; // Reemplaza con el nombre de tu primer modelo
use App\Models\Pedido; // Reemplaza con el nombre de tu segundo modelo

class PlatoPedidoController extends Controller
{
    /**
     * Asocia dos modelos en la tabla pivot.
     */
    public function attach(Request $request)
    {
        $platoId = $request->input('id_plato');
        $pedidoId = $request->input('id_pedido');

        $plato = Plato::find($platoId);
        $pedido = Pedido::find($pedidoId);

        $plato->pedido_plato()->attach($pedido);

        // Realizar cualquier otra acción o redireccionar según sea necesario
    }

    /**
     * Desasocia dos modelos en la tabla pivot.
     */
    public function detach(Request $request)
    {
        $platoId = $request->input('id_plato');
        $pedidoId = $request->input('id_pedido');

        $plato = Plato::find($platoId);
        $segundoModelo = Pedido::find($pedidoId);

        $plato->pedido_plato()->detach($pedido);

        // Realizar cualquier otra acción o redireccionar según sea necesario
    }
}