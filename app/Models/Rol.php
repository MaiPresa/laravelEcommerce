<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    use HasFactory;

    protected $table = 'roles'; //sino se lo indica por convención laravel usa el plural de rol -> rols XD
    protected $primaryKey = 'id_roles';
    public $timestamps = false; // desactivo marcas temporales

public function usuarios(){
    return $this->hasMany(Usuario::class, 'id_roles');
}

}
