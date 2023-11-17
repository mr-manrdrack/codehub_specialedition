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
    public $listanotas, $listafj, $listafnj, $listanotasa;
    public $listaPFAP, $listaPFAS, $listaPFAT, $listaPFAQ;
    
    public function __construct($listanotasa,$nomedisciplina,$listaPFAP,$listaPFAS,$listaPFAT,$listaPFAQ,$mediaanual,$notarecfinal,$notafinal, $listanotas, $listafj, $listafnj)
    {
        $this->nomedisciplina = $nomedisciplina;
        $this->listanotasa = $listanotasa;

        $this->listanotas = $listanotas;
        $this->listafj = $listafj;
        $this->listafnj = $listafnj;
        $this->listaPFAP = $listaPFAP;
        
        $this->listaPFAS = $listaPFAS;

        $this->listaPFAT = $listaPFAT;

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
