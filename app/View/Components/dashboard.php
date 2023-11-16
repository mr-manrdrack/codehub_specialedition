<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class dashboard extends Component
{
    public $acessoCaminho1, $acessoCaminho2, $acessoCaminho3, $acessoCaminho4, $acessoCaminho5, $acessoCaminho6, $acessoCaminho7;
    public $caminho1, $caminho2, $caminho3, $caminho4, $caminho5, $caminho6, $caminho7;
    public $imagemCaminho1, $imagemCaminho2, $imagemCaminho3, $imagemCaminho4, $imagemCaminho5, $imagemCaminho6;
    public $imagemCaroussel1, $imagemCaroussel2, $imagemCaroussel3, $imagemCaroussel4, $imagemCaroussel5, $imagemCaroussel6;

    public function __construct($acessoCaminho1, $acessoCaminho2, $acessoCaminho3, $acessoCaminho4, $acessoCaminho5, $acessoCaminho6, $acessoCaminho7,
    $caminho1, $caminho2, $caminho3, $caminho4, $caminho5, $caminho6, $caminho7,
    $imagemCaminho1, $imagemCaminho2, $imagemCaminho3, $imagemCaminho4, $imagemCaminho5, $imagemCaminho6,
    $imagemCaroussel1, $imagemCaroussel2, $imagemCaroussel3, $imagemCaroussel4, $imagemCaroussel5, $imagemCaroussel6)
    {
        $this->acessoCaminho1 = $acessoCaminho1;
        $this->acessoCaminho2 = $acessoCaminho2;
        $this->acessoCaminho3 = $acessoCaminho3;
        $this->acessoCaminho4 = $acessoCaminho4;
        $this->acessoCaminho5 = $acessoCaminho5;
        $this->acessoCaminho6 = $acessoCaminho6;
        /* Acesso para a pagina de eventos do professor via caroussel */
        $this->acessoCaminho7 = $acessoCaminho7;
        $this->caminho1 = $caminho1;
        $this->caminho2 = $caminho2;
        $this->caminho3 = $caminho3;
        $this->caminho4 = $caminho4;
        $this->caminho5 = $caminho5;
        $this->caminho6 = $caminho6;
        $this->caminho7 = $caminho7;
        /* Imagens para os icones dos caminhos */
        $this->imagemCaminho1 = $imagemCaminho1;
        $this->imagemCaminho2 = $imagemCaminho2;
        $this->imagemCaminho3 = $imagemCaminho3;
        $this->imagemCaminho4 = $imagemCaminho4;
        $this->imagemCaminho5 = $imagemCaminho5;
        $this->imagemCaminho6 = $imagemCaminho6;
        /* Imagens para os caroussels */
        $this->imagemCaroussel1 = $imagemCaroussel1;
        $this->imagemCaroussel2 = $imagemCaroussel2;
        $this->imagemCaroussel3 = $imagemCaroussel3;
        $this->imagemCaroussel4 = $imagemCaroussel4;
        $this->imagemCaroussel5 = $imagemCaroussel5;
        $this->imagemCaroussel6 = $imagemCaroussel6;
    }

    /** os teste estao sendo feito no app.blade.php lembra de chamar os css certo, eu ja volto minha familia acha que sou empregado deles e mesmo falando que tenho que entregar um bagui em uma semana eles tao fds e eu tive que ir fazer umas coisas preciso sair dessa cas o mais rapido possivel entende? ok
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.dashboard');
    }
}
