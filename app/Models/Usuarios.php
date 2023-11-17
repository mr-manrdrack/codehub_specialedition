<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usuarios extends Model
{
    use HasFactory;

    protected $primaryKey = 'Matricula';
    protected $fillable = [
        'Matricula',
        'usuario',
        'nome',
        'turma',
        'email',
        'senha',
        'cargo'
    ];
}
