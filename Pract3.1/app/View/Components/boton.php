<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class boton extends Component
{
    public $nombre;
    public $ruta;
    /**
     * Create a new component instance.
     */
    public function __construct($nombre, $ruta)
    {
        //
        $this->nombre = $nombre;
        $this->ruta = $ruta;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.boton');
    }
}
