<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Disciplinas;

class AddDisciplina extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('coordenador.add_disciplina');
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
        $add_disciplina = new Disciplinas;

        $add_disciplina->nomesdisciplina = $request->nomesdisciplina;

        $add_disciplina -> save();

        return redirect('coordenador/add_disciplina');
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
