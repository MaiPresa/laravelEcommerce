<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Card extends Component
{
    public $id_categoria;
    public $precio;
    public $nombre_plato;
    public $numero;
    public $imagen;
    public $id;
    public $id_plato;
    /**
     * Create a new component instance.
     */
    public function __construct($idCategoria, $precio, $nombrePlato, $numero=0, $imagen, $id, $idPlato)
    {
        $this -> id_categoria=$idCategoria;
        $this -> precio=$precio;
        $this -> nombre_plato=$nombrePlato;
        $this -> numero=$numero;
        $this -> imagen=$imagen;
        $this -> id=$id;
        $this -> id_plato=$idPlato;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.card');
    }
}
