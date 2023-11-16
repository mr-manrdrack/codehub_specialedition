<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class tabela_horario extends Component
{
    public $primeirasAulas, $segundasAulas, $terceirasAulas, $quartasAulas, $quintasAulas, $sextasAulas, $setimasAulas, $oitavasAulas, $nonasAulas;
    public function __construct($primeirasAulas, $segundasAulas, $terceirasAulas, $quartasAulas, $quintasAulas, $sextasAulas, $setimasAulas, $oitavasAulas, $nonasAulas)
    {
        $this->primeirasAulas = $primeirasAulas;
        $this->segundasAulas = $segundasAulas;
        $this->terceirasAulas = $terceirasAulas;
        $this->quartasAulas = $quartasAulas;
        $this->quintasAulas = $quintasAulas;
        $this->sextasAulas = $sextasAulas;
        $this->setimasAulas = $setimasAulas;
        $this->oitavasAulas = $oitavasAulas;
        $this->nonasAulas = $nonasAulas;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.tabela_horario');
    }
}
