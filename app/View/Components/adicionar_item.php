<?php

namespace App\View\Components;

use App\Models\Event;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class adicionar_item extends Component
{
    public $inputOpcao1, $inputOpcao2, $inputOpcao3, $inputDescricao, $inputHorario, $inputTurma;
    public $input1, $input2, $input3, $descricao, $horario, $turmas, $rota;

    public function __construct($inputOpcao1, $inputOpcao2, $inputOpcao3, 
    $inputDescricao, $inputHorario, $input1, 
    $input2, $input3, $descricao, $horario, $rota, $turmas, $inputTurma)
    {
        $this->inputOpcao1 = $inputOpcao1;
        $this->inputOpcao2 = $inputOpcao2;
        $this->inputOpcao3 = $inputOpcao3;
        $this->inputDescricao = $inputDescricao;
        $this->inputHorario = $inputHorario;
        $this->input1 = $input1;
        $this->input2 = $input2;
        $this->input3 = $input3;
        $this->descricao = $descricao;
        $this->horario = $horario;
        $this->rota = $rota;
        $this->turmas = $turmas;
        $this->input = $inputTurma;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.adicionar_item');
    }
}
