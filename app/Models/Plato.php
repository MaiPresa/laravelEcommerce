<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plato extends Model
{
    use HasFactory;
    public $timestamps = false; 
    protected $primaryKey = 'id_plato';

    protected $primaryKey = 'id_plato';
    public $timestamps = false;

    public function pedidos(){
        return $this->belongsToMany(Pedido::class, 'plato_pedido', 'id_plato', 'id_pedido')->withPivot('cantidad_platos');
    }

    public function categorias(){
        return $this->belongsTo(Categoria::class, 'id_categorias');
    }
}
