<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cardapio extends Model
{
    use HasFactory;

    protected $primaryKey = "id";
    protected $fillable = [
        'SegundaBebidaManha',
        'SegundaComidaManha',
        'SegundaBebidaAlmoço',
        'SegundaComidaAlmoço',
        'SegundaBebidaTarde',
        'SegundaComidaTarde',

        'TerçaBebidaManha',
        'TerçaComidaManha',
        'TerçaBebidaAlmoço',
        'TerçaComidaAlmoço',
        'TerçaBebidaTarde',
        'TerçaComidaTarde',

        'QuartaBebidaManha',
        'QuartaComidaManha',
        'QuartaBebidaAlmoço',
        'QuartaComidaAlmoço',
        'QuartaBebidaTarde',
        'QuartaComidaTarde',

        'QuintaBebidaManha',
        'QuintaComidaManha',
        'QuintaBebidaAlmoço',
        'QuintaComidaAlmoço',
        'QuintaBebidaTarde',
        'QuintaComidaTarde',

        'SextaBebidaManha',
        'SextaComidaManha',
        'SextaBebidaAlmoço',
        'SextaComidaAlmoço',
        'SextaBebidaTarde',
        'SextaComidaTarde',
    ];
}
