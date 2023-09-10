<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plato; 
use App\Models\Pedido; 

class PlatoPedidoController extends Controller
{
    public function update (Request $request, $id_pedido, $id_plato) {
        $cantidad = $request->input('cantidad platos');
        Pedido::findOrFail($id_pedido)->platos()->syncWithoutDetaching([
            $id_plato => ['cantidad_platos' => $cantidad]
        ]);
        return response()->json(['message' => 'muero de sueño(actualizado a las 18.23 del sabado despues de trabajar toda la p... noche)']);
    }

    public function destroy ($id_pedido, $id_plato) {
        Pedido::findOrFail($id_pedido)->platos()->detach($id_plato);
        return response()->json(['message' => 'anoche hice 15000 bandejas']);
        }
}


















//     public function attach(Request $request)
//     {
//         $platoId = $request->input('id_plato');
//         $pedidoId = $request->input('id_pedido');

//         $plato = Plato::find($platoId);
//         $pedido = Pedido::find($pedidoId);

//         $plato->plato_pedido()->attach($pedido);

//         // Realizar cualquier otra acción o redireccionar según sea necesario
//     }

//     /**
//      * Desasocia dos modelos en la tabla pivot.
//      */
//     public function detach(Request $request)
//     {
//         $platoId = $request->input('id_plato');
//         $pedidoId = $request->input('id_pedido');

//         $plato = Plato::find($platoId);
//         $segundoModelo = Pedido::find($pedidoId);

//         $plato->plato_pedido()->detach($pedido);

//         // Realizar cualquier otra acción o redireccionar según sea necesario
//     }
// }