<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class titulo extends Component
{
    public $titulo, $subtitulo;

    public function __construct($titulo, $subtitulo)
    {
        $this->titulo = $titulo;
        $this->subtitulo = $subtitulo;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.titulo');
    }
}
