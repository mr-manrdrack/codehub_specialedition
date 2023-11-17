<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class tabela_add_dados extends Component
{
    public $professores;
    public $horario;
    public $descricao1, $descricao2;
    public function __construct($professores,$horario, $descricao1, $descricao2)
    {
        $this->professores = $professores;
        $this->horario = $horario; 
        $this->descricao1 = $descricao1; 
        $this->descricao2 = $descricao2; 
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.tabela_add_dados');
    }
}
