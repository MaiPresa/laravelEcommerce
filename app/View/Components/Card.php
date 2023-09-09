<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Card extends Component
{
    public $key;
    public $dataId;
    public $title;
    public $numero;
    /**
     * Create a new component instance.
     */
    public function __construct($key, $dataId, $title, $numero=0)
    {
        $this -> key=$key;
        $this -> dataId=$dataId;
        $this -> title=$title;
        $this -> numero=$numero;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.card');
    }
}
