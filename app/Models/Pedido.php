<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;
    public $timestamps = false;

public function usuarios(){
    return $this->belongsTo(Usuarios::class, 'id_usuarios');
}

public function platos(){
    return $this->belongsToMany(Platos::class, 'plato_pedido', 'id_pedido', 'id_plato')->withPivot('cantidad_platos');
}

}
