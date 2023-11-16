<?php

namespace App\Http\Controllers;


use App\Models\EventCadastro;
use App\Models\Usuarios;
use App\Models\Cadastro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class CadastroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('/cadastro');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'usuario' => 'required',
            'email' => ['required', 'email'],
            'matricula' => 'required',
            'senha' => 'required|min:8'
        ],[
            'usuario.required' => 'O campo Usuario é obrigatório',
            'email.required' => 'O campo Email é obrigatório',
            'email.email' => 'O Email precisa ser válido',
            'matricula.required' => 'O campo Matricula é obrigatório',
            'senha.required' => 'O campo Senha é obrigatório'
        ]);

        $usuariosBD = new Usuarios;

        $usuarioMatriculaBD = $usuariosBD->where('Matricula', $request->matricula)->value('Matricula');
        if ($usuarioMatriculaBD == $request->matricula) {
            $usuariosBD->where('Matricula', $request->matricula)->update(['email' => $request->email]);
        }/*else{
            abort(403, 'Algo Errado');
        }*/
        return redirect()->route('login.index');
    }
}
