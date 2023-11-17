<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class realizar_chamada extends Component
{
    public $disc, $turmas, $alunos;
    public $MatriculaAluno;

    public function __construct($disc, $turmas, $alunos)
    {
        $this->disc = $disc;
        $this->turmas = $turmas;
        $this->alunos = $alunos;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.realizar_chamada');
    }
}
