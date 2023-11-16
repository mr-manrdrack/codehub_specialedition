<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class boletim extends Component
{
    /**
     * Create a new component instance.
     */
    public $nomedisciplina, $mediaanual, $notarecfinal, $notafinal;
    public $listanotas, $listafj, $listafnj;
    public $listanotasS, $listafj2, $listafnj2;
    public $listanotas3, $listafj3, $listafnj3;
    public $listanotas4, $listafj4, $listafnj4;
    public $listaPFAP, $listaPFAS, $listaPFAT, $listaPFAQ;
    
    public function __construct($nomedisciplina,$listaPFAP,$listaPFAS,$listaPFAT,$listaPFAQ,$mediaanual,$notarecfinal,$notafinal, $listanotas, $listafj, $listafnj, $listanotasS, $listafj2, $listafnj2, $listanotas3, $listafj3, $listafnj3, $listanotas4, $listafj4, $listafnj4)
    {
        $this->nomedisciplina = $nomedisciplina;

        $this->listanotas = $listanotas;
        $this->listafj = $listafj;
        $this->listafnj = $listafnj;
        $this->listaPFAP = $listaPFAP;
        
        $this->listanotasS = $listanotasS;
        $this->listafj2 = $listafj2;
        $this->listafnj2 = $listafnj2;
        $this->listaPFAS = $listaPFAS;

        $this->listanotas3 = $listanotas3;
        $this->listafj3 = $listafj3;
        $this->listafnj3 = $listafnj3;
        $this->listaPFAT = $listaPFAT;

        $this->listanotas4 = $listanotas4;
        $this->listafj4 = $listafj4;
        $this->listafnj4 = $listafnj4;
        $this->listaPFAQ = $listaPFAQ;

        $this->mediaanual = $mediaanual;
        $this->notarecfinal = $notarecfinal;
        $this->notafinal = $notafinal;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.boletim');
    }
}
