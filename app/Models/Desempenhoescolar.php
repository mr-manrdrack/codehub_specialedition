<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Desempenhoescolar extends Model
{
    use HasFactory;

    protected $primaryKey = 'ComponentesCurriculares';

    protected $fillable = [
        'ComponenetesCurriculares',

        'PUnidadeMedia',
        'PUnidadeFJ',
        'PUnidadeFNJ',
        'PUnidadePFA',

        'SUnidadeMedia',
        'SUnidadeFJ',
        'SUnidadeFNJ',
        'SUnidadePFA',

        'TUnidadeMedia',
        'TUnidadeFJ',
        'TUnidadeFNJ',
        'TUnidadePFA',

        'QUnidadeMedia',
        'QUnidadeFJ',
        'QUnidadeFNJ',
        'QUnidadePFA',

        'MEdiaAnual',
        'NotaRecFinal',
        'NotaFinal'
    ];
}
