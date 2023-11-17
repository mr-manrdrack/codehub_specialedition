<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CallClassProfessorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $disciplinas = DB::table('disciplinas')->get();
        $turmas = DB::table('usuarios')->select('turma')->get();
        $alunos = DB::table('usuarios')->where('cargo', 'aluno')->get();
        return view('professor.realizar_chamada', [
            'disc' => $disciplinas,
            'turmas' => $turmas,
            'alunos' => $alunos
        ]);
        return view('professor.realizar_chamada', [
            'disc' => $disciplinas,
            'turmas' => $turmas,
            'alunos' => $alunos
        ]);
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
        //
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
