<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    use HasFactory;
    public $timestamps = false; 
    protected $primaryKey = 'id_roles';

public function usuarios(){
    return $this->hasMany(Usuario::class, 'id_roles');
}

}
