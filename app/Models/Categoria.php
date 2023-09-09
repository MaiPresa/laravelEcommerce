<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;
    public $timestamps = false; 
    protected $primaryKey = 'id_categoria';

public function platos (){
    return $this->hasMany(Plato::class, 'id_categoria');
}
}
