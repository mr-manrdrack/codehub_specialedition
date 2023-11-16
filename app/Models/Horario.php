<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    use HasFactory;

    protected $primaryKey = "id";
    protected $fillable = [
        'professorHora',
        'dia',

        'priturmaAula',
        'primeiraAula',

        'segturmaAula',
        'segundaAula',
        
        'terturmaAula',
        'terceiraAula',
        
        'quaturmaAula',
        'quartaAula',
        
        'quiturmaAula',
        'quintaAula',
        
        'sexturmaAula',
        'sextaAula',
        
        'setturmaAula',
        'setimaAula',
        
        'oitturmaAula',
        'oitavaAula',
        
        'nonturmaAula',
        'nonaAula'
    ];
}
