<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;

class Cadastro extends Authenticatable
{
    use HasFactory,HasApiTokens;

    public function getAuthPassword()
    {
        return $this->senha;
    }
    protected $primaryKey = 'MatriculaAluno';

    protected $guard = 'cadastro';
    protected $table = 'aluno';
    public $incrementing = false;

    protected $fillable = [
        'nome',
        'email',
        'matriculaAluno',
        'senha'
    ];

    protected $hidden = [
        'senha'
    ];
}
