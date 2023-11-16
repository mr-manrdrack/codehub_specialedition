<?php

namespace App\View\Components;


use App\Models\Cardapio;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class tabela_refeicao extends Component
{
    public $SegundaBebidaManha,$SegundaComidaManha,$SegundaBebidaAlmoço,
    $SegundaComidaAlmoço,$SegundaBebidaTarde,$SegundaComidaTarde;

    public $TerçaBebidaManha,$TerçaComidaManha,$TerçaBebidaAlmoço,
    $TerçaComidaAlmoço,$TerçaBebidaTarde,$TerçaComidaTarde;

    public $QuartaBebidaManha,$QuartaComidaManha,$QuartaBebidaAlmoço,
    $QuartaComidaAlmoço,$QuartaBebidaTarde,$QuartaComidaTarde;

    public $QuintaBebidaManha,$QuintaComidaManha,$QuintaBebidaAlmoço,
    $QuintaComidaAlmoço,$QuintaBebidaTarde,$QuintaComidaTarde;
    
    public $SextaBebidaManha,$SextaComidaManha,$SextaBebidaAlmoço,
    $SextaComidaAlmoço,$SextaBebidaTarde,$SextaComidaTarde;

    public function __construct($SegundaBebidaManha,$SegundaComidaManha,$SegundaBebidaAlmoço,
    $SegundaComidaAlmoço,$SegundaBebidaTarde,$SegundaComidaTarde, 
    $TerçaBebidaManha,$TerçaComidaManha,$TerçaBebidaAlmoço,
    $TerçaComidaAlmoço,$TerçaBebidaTarde,$TerçaComidaTarde,
    $QuartaBebidaManha,$QuartaComidaManha,$QuartaBebidaAlmoço,
    $QuartaComidaAlmoço,$QuartaBebidaTarde,$QuartaComidaTarde,
    $QuintaBebidaManha,$QuintaComidaManha,$QuintaBebidaAlmoço,
    $QuintaComidaAlmoço,$QuintaBebidaTarde,$QuintaComidaTarde,
    $SextaBebidaManha,$SextaComidaManha,$SextaBebidaAlmoço,
    $SextaComidaAlmoço,$SextaBebidaTarde,$SextaComidaTarde)
    {
        $this->SegundaBebidaManha = $SegundaBebidaManha;
        $this->SegundaComidaManha = $SegundaComidaManha;
        $this->SegundaBebidaAlmoço = $SegundaBebidaAlmoço;
        $this->SegundaComidaAlmoço = $SegundaComidaAlmoço;
        $this->SegundaBebidaTarde = $SegundaBebidaTarde;
        $this->SegundaComidaTarde = $SegundaComidaTarde;

        $this->TerçaBebidaManha = $TerçaBebidaManha;
        $this->TerçaComidaManha = $TerçaComidaManha;
        $this->TerçaBebidaAlmoço = $TerçaBebidaAlmoço;
        $this->TerçaComidaAlmoço = $TerçaComidaAlmoço;
        $this->TerçaBebidaTarde = $TerçaBebidaTarde;
        $this->TerçaComidaTarde = $TerçaComidaTarde;

        $this->QuartaBebidaManha = $QuartaBebidaManha;
        $this->QuartaComidaManha = $QuartaComidaManha;
        $this->QuartaBebidaAlmoço = $QuartaBebidaAlmoço;
        $this->QuartaComidaAlmoço = $QuartaComidaAlmoço;
        $this->QuartaBebidaTarde = $QuartaBebidaTarde;
        $this->QuartaComidaTarde = $QuartaComidaTarde;

        $this->QuintaBebidaManha = $QuintaBebidaManha;
        $this->QuintaComidaManha = $QuintaComidaManha;
        $this->QuintaBebidaAlmoço = $QuintaBebidaAlmoço;
        $this->QuintaComidaAlmoço = $QuintaComidaAlmoço;
        $this->QuintaBebidaTarde = $QuintaBebidaTarde;
        $this->QuintaComidaTarde = $QuintaComidaTarde;

        $this->SextaBebidaManha = $SextaBebidaManha;
        $this->SextaComidaManha = $SextaComidaManha;
        $this->SextaBebidaAlmoço = $SextaBebidaAlmoço;
        $this->SextaComidaAlmoço = $SextaComidaAlmoço;
        $this->SextaBebidaTarde = $SextaBebidaTarde;
        $this->SextaComidaTarde = $SextaComidaTarde;

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.tabela_refeicao');
    }
}
