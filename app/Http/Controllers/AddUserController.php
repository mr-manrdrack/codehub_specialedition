<?php

namespace App\Http\Controllers;

use App\Models\Usuarios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class AddUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $turmas = DB::table('usuarios')->select('turma')->get();

        return view('coordenador.add_usuario', ['turmas' => $turmas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('coordenador.add_usuario');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $usuariosBD = new Usuarios;

        $usuariosBD->Matricula = $request->matricula;
        $usuariosBD->senha = Hash::make($request->matricula);
        $usuariosBD->usuario = $request->matricula;
        $usuariosBD->nome = $request->nome;
        $usuariosBD->cargo = $request->funcao;
        $usuariosBD->turma = "2 ssa";
        $usuariosBD->save();

        return redirect()->route('add_usuarios.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
