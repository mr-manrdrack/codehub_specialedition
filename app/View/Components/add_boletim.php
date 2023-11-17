<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class add_boletim extends Component
{
    /**
     * Create a new component instance.
     */

    public $disc, $turmas, $alunos;
    public $MatriculaAluno;

    public function __construct($disc, $turmas, $alunos, $MatriculaAluno)
    {
        foreach($alunos as $aluno) {
            $MatriculaAluno = $aluno -> Matricula;

            $this->disc = $disc;
            $this->turmas = $turmas;
            $this->alunos = $alunos;
            $this->MatriculaAluno = $MatriculaAluno;
        }
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.add_boletim');
    }
}
