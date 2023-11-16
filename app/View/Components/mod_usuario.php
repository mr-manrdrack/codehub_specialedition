<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class mod_usuario extends Component
{
    public $user, $nomeUser, $emailUser, $aniversarioUser, $matriculaUser;

    public function __construct($user, $nomeUser, $emailUser, $aniversarioUser, $matriculaUser)
    {
        $this->user = $user;
        $this->nomeUser = $nomeUser;
        $this->emailUser = $emailUser;
        $this->aniversarioUser = $aniversarioUser;
        $this->matriculaUser = $matriculaUser;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.mod_usuario');
    }
}
