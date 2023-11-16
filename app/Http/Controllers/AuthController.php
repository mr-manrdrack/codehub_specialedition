<?php

namespace App\Http\Controllers;

use App\Models\Cadastro;
use App\Models\User;
use Illuminate\Http\Request;
use illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;


class AuthController extends Controller
{   
    public function index()
    {
        return view('/login');
    }

    public function login (Request $request)
    {
        if($request->email== "xavierricardo@gmail.com"){
            return redirect('/aluno');
        }elseif ($request->email == "matheusfarias@gmail.com") {
            return redirect('/professor');
        }elseif($request->email == 'elegivania@gmail.com'){
            return redirect('/coordenador');
        }else{
            abort(403,'Algo errado');
        }
        
        /*$request->validate([
            'email' => ['required', 'email'],
            'senha' => 'required|min:8'
        ],[
            'email.required' => 'O campo Email é obrigatório',
            'email.email' => 'O Email precisa ser válido',
            'senha.required' => 'O campo Senha é obrigatório'
        ]);

        $userDB = Cadastro::where('email', $request->email)->first();

        if ($userDB && ($request->senha === $userDB->senha)) {
            $token = $userDB->createToken('aluno');
            return redirect('/aluno');
        }
            return response()->json([
                'data' => [
                    'token' => $token->plainTextToken
                ]
            ]);
        } else {
            throw ValidationException::withMessages([
                'email' => ['as credenciais estão incorretas']
            ]);
        }*/
    }

    public function logout()
    {

    }

    public function register()
    {

    }
}
