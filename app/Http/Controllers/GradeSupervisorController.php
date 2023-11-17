<?php

namespace App\Http\Controllers;

use App\Models\Horario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GradeSupervisorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $professores = DB::table('usuarios')->where('cargo', 'professor')->get();
        
        return view('coordenador.add_horario', ['professores' => $professores]);
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
        $horarioDB = new Horario;

        $horarioDB->professorHora = $request->professorLista;
        $horarioDB->dia = "Segunda";

        $horarioDB->priturmaAula = $request->celula1_0;
        $horarioDB->primeiraAula = $request->celula2_0;

        $horarioDB->segturmaAula = $request->celula1_1;
        $horarioDB->segundaAula = $request->celula2_1;

        $horarioDB->terturmaAula = $request->celula1_2;
        $horarioDB->terceiraAula = $request->celula2_2;

        $horarioDB->quaturmaAula = $request->celula1_3;
        $horarioDB->quartaAula = $request->celula2_3;

        $horarioDB->quiturmaAula = $request->celula1_4;
        $horarioDB->quintaAula = $request->celula2_4;

        $horarioDB->sexturmaAula = $request->celula1_5;
        $horarioDB->sextaAula = $request->celula2_5;

        $horarioDB->setturmaAula = $request->celula1_6;
        $horarioDB->setimaAula = $request->celula2_6;

        $horarioDB->oitturmaAula = $request->celula1_7;
        $horarioDB->oitavaAula = $request->celula2_7;

        $horarioDB->nonturmaAula = $request->celula1_8;
        $horarioDB->nonaAula = $request->celula2_8;

        $horarioDB->save();

        $horarioDB2 = new Horario;

        $horarioDB2->professorHora = $request->professorLista;
        $horarioDB2->dia = "Terça";

        $horarioDB2->priturmaAula = $request->celula1_0;
        $horarioDB2->primeiraAula = $request->celula2_0;

        $horarioDB2->segturmaAula = $request->celula1_1;
        $horarioDB2->segundaAula = $request->celula2_1;

        $horarioDB2->terturmaAula = $request->celula1_2;
        $horarioDB2->terceiraAula = $request->celula2_2;

        $horarioDB2->quaturmaAula = $request->celula1_3;
        $horarioDB2->quartaAula = $request->celula2_3;

        $horarioDB2->quiturmaAula = $request->celula1_4;
        $horarioDB2->quintaAula = $request->celula2_4;

        $horarioDB2->sexturmaAula = $request->celula1_5;
        $horarioDB2->sextaAula = $request->celula2_5;

        $horarioDB2->setturmaAula = $request->celula1_6;
        $horarioDB2->setimaAula = $request->celula2_6;

        $horarioDB2->oitturmaAula = $request->celula1_7;
        $horarioDB2->oitavaAula = $request->celula2_7;

        $horarioDB2->nonturmaAula = $request->celula1_8;
        $horarioDB2->nonaAula = $request->celula2_8;

        $horarioDB2->save();

        $horarioDB3 = new Horario;

        $horarioDB3->professorHora = $request->professorLista;
        $horarioDB3->dia = "Quarta";

        $horarioDB3->priturmaAula = $request->celula1_0;
        $horarioDB3->primeiraAula = $request->celula2_0;

        $horarioDB3->segturmaAula = $request->celula1_1;
        $horarioDB3->segundaAula = $request->celula2_1;

        $horarioDB3->terturmaAula = $request->celula1_2;
        $horarioDB3->terceiraAula = $request->celula2_2;

        $horarioDB3->quaturmaAula = $request->celula1_3;
        $horarioDB3->quartaAula = $request->celula2_3;

        $horarioDB3->quiturmaAula = $request->celula1_4;
        $horarioDB3->quintaAula = $request->celula2_4;

        $horarioDB3->sexturmaAula = $request->celula1_5;
        $horarioDB3->sextaAula = $request->celula2_5;

        $horarioDB3->setturmaAula = $request->celula1_6;
        $horarioDB3->setimaAula = $request->celula2_6;

        $horarioDB3->oitturmaAula = $request->celula1_7;
        $horarioDB3->oitavaAula = $request->celula2_7;

        $horarioDB3->nonturmaAula = $request->celula1_8;
        $horarioDB3->nonaAula = $request->celula2_8;

        $horarioDB3->save();

        $horarioDB4 = new Horario;

        $horarioDB4->professorHora = $request->professorLista;
        $horarioDB4->dia = "Quinta";

        $horarioDB4->priturmaAula = $request->celula1_0;
        $horarioDB4->primeiraAula = $request->celula2_0;

        $horarioDB4->segturmaAula = $request->celula1_1;
        $horarioDB4->segundaAula = $request->celula2_1;

        $horarioDB4->terturmaAula = $request->celula1_2;
        $horarioDB4->terceiraAula = $request->celula2_2;

        $horarioDB4->quaturmaAula = $request->celula1_3;
        $horarioDB4->quartaAula = $request->celula2_3;

        $horarioDB4->quiturmaAula = $request->celula1_4;
        $horarioDB4->quintaAula = $request->celula2_4;

        $horarioDB4->sexturmaAula = $request->celula1_5;
        $horarioDB4->sextaAula = $request->celula2_5;

        $horarioDB4->setturmaAula = $request->celula1_6;
        $horarioDB4->setimaAula = $request->celula2_6;

        $horarioDB4->oitturmaAula = $request->celula1_7;
        $horarioDB4->oitavaAula = $request->celula2_7;

        $horarioDB4->nonturmaAula = $request->celula1_8;
        $horarioDB4->nonaAula = $request->celula2_8;

        $horarioDB4->save();

        $horarioDB5 = new Horario;

        $horarioDB5->professorHora = $request->professorLista;
        $horarioDB5->dia = "Sexta";

        $horarioDB5->priturmaAula = $request->celula1_0;
        $horarioDB5->primeiraAula = $request->celula2_0;

        $horarioDB5->segturmaAula = $request->celula1_1;
        $horarioDB5->segundaAula = $request->celula2_1;

        $horarioDB5->terturmaAula = $request->celula1_2;
        $horarioDB5->terceiraAula = $request->celula2_2;

        $horarioDB5->quaturmaAula = $request->celula1_3;
        $horarioDB5->quartaAula = $request->celula2_3;

        $horarioDB5->quiturmaAula = $request->celula1_4;
        $horarioDB5->quintaAula = $request->celula2_4;

        $horarioDB5->sexturmaAula = $request->celula1_5;
        $horarioDB5->sextaAula = $request->celula2_5;

        $horarioDB5->setturmaAula = $request->celula1_6;
        $horarioDB5->setimaAula = $request->celula2_6;

        $horarioDB5->oitturmaAula = $request->celula1_7;
        $horarioDB5->oitavaAula = $request->celula2_7;

        $horarioDB5->nonturmaAula = $request->celula1_8;
        $horarioDB5->nonaAula = $request->celula2_8;

        $horarioDB5->save();


        return redirect()->route('add_horario.index');
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
