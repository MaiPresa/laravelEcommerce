<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = 'id_pedido';

public function usuarios(){
    return $this->belongsTo(Usuario::class, 'id_usuarios');
}

public function platos(){
    return $this->belongsToMany(Plato::class, 'plato_pedido', 'id_pedido', 'id_plato')->withPivot('cantidad_platos');
}

}
