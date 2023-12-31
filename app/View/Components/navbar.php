<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class navbar extends Component
{
    public $home, $caminhoOpcao1, $caminhoOpcao2, $caminhoOpcao3, $caminhoOpcao4, $caminhoOpcao5, $caminhoOpcao6, $caminhoOpcao7,$caminhoOpcao8;
    public $opcao1, $opcao2, $opcao3, $opcao4, $opcao5, $opcao6, $opcao7, $opcao8;

    public function __construct($home, $caminhoOpcao1, $caminhoOpcao2, $caminhoOpcao3, $caminhoOpcao4, $caminhoOpcao5, $caminhoOpcao6, $caminhoOpcao7, $caminhoOpcao8 ,$opcao1, $opcao2, $opcao3, $opcao4, $opcao5, $opcao6, $opcao7, $opcao8)
    {
        $this->home = $home;
        $this->caminhoOpcao1 = $caminhoOpcao1;
        $this->caminhoOpcao2 = $caminhoOpcao2;
        $this->caminhoOpcao3 = $caminhoOpcao3;
        $this->caminhoOpcao4 = $caminhoOpcao4;
        $this->caminhoOpcao5 = $caminhoOpcao5;
        $this->caminhoOpcao6 = $caminhoOpcao6;
        $this->caminhoOpcao7 = $caminhoOpcao7;
        $this->caminhoOpcao8 = $caminhoOpcao8;
        $this->opcao1 = $opcao1;
        $this->opcao2 = $opcao2;
        $this->opcao3 = $opcao3;
        $this->opcao4 = $opcao4;
        $this->opcao5 = $opcao5;
        $this->opcao6 = $opcao6;
        $this->opcao7 = $opcao7;
        $this->opcao8 = $opcao8;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.navbar');
    }
}
