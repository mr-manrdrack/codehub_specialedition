<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuarios;
use Illuminate\Support\Facades\DB;

class UserSupervisorController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $usuario = new Usuarios;

        $usuario->nome = $request->nome;
        $usuario->cargo = $request->cargo;
        $usuario->Matricula = $request->Matricula;
        $usuario->turma = $request->turma;

        $usuario -> save();

        return redirect('/coordenador/add_usuarios');
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
