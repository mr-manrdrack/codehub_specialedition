<?php

namespace App\View\Components;

use App\Models\Event;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class eventos extends Component
{
    public $eventos;
    public function __construct($eventos)
    {
        $this->eventos = $eventos;
    }

    public function render(): View|Closure|string
    {
        
        return view('components.eventos');
    }
}
