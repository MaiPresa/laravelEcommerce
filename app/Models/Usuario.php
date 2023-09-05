<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    public $timestamps = false; 

public function roles () {
    return $this->belongsTo(roles::class, 'id_rol');
}

public function pedidos() {
    return $this->hasMany(pedidos::class, 'id_usuario');
}

}