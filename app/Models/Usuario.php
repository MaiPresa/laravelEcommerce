<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    public $timestamps = false; 
    protected $primaryKey = 'id_usuarios';

public function roles () {
    return $this->belongsTo(Rol::class, 'id_rol');
}

public function pedidos() {
    return $this->hasMany(Pedido::class, 'id_usuario');
}

}