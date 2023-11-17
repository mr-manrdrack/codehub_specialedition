<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Caderneta;

class NewsletterSupervisorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $disciplinas = DB::table('disciplinas')->get();
        $turmas = DB::table('turmas')->get();
        $alunos = DB::table('usuarios')->where('cargo', 'aluno')->get();
    
        return view('/coordenador/add_boletim', [
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
        $caderneta = new Caderneta;

        $caderneta -> MatriculaAluno = $request -> MatriculaAluno;
        $caderneta -> nota1 = $request -> nota1;
        $caderneta -> nota2 = $request -> nota2;
        $caderneta -> nota3 = $request -> nota3;
        $caderneta -> nota4 = $request -> nota4;
        $caderneta -> nota5 = $request -> nota5;
        $caderneta -> prova = $request -> prova;
        $caderneta -> média = $request -> média;

        $caderneta -> save();

        return redirect()->route('coordenador_add_boletim.index');
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
