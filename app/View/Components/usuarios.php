<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class usuarios extends Component
{
    public $titulo, $nome, $usuario, $email, $senha, $turma; 

    public function __construct($titulo, $nome, $usuario, $email, $senha, $turma)
    {
      $this->titulo = $titulo;
      $this->nome = $nome;
      $this->usuario = $usuario;
      $this->email = $email;
      $this->senha = $senha;
      $this->turma = $turma;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.usuarios');
    }
}
