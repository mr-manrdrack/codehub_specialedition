<?php

namespace App\Http\Controllers;

use App\Models\Desempenhoescolar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsletterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('aluno/boletim');
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
    public function show(Request $request)
    {
        global $nomedisciplina; $nomedisciplina = [];

        global $listanotas; $listanotas = [];
        global $listafj; $listafj = [];
        global $listafnj; $listafnj = [];
        global $listaPFAP; $listaPFAP = [];

        global $listanotas2; $listanotas2 = [];
        global $listafj2; $listafj2 = [];
        global $listafnj2; $listafnj2 = [];
        global $listaPFAS; $listaPFAS = [];

        global $listanotas3; $listanotas3 = [];
        global $listafj3; $listafj3 = [];
        global $listafnj3; $listafnj3 = [];
        global $listaPFAT; $listaPFAT = [];

        global $listanotas4; $listanotas4= [];
        global $listafj4; $listafj4 = [];
        global $listafnj4; $listafnj4 = [];
        global $listaPFAQ; $listaPFAQ =[];

        global $mediaanual; $mediaanual = [];
        global $notarecfinal; $notarecfinal = [];
        global $notafinal; $notafinal = [];

        $notas = DB::table('desempenhoescolar')->get();

        foreach ($notas as $nota) {
            $nomedisciplina[] = $nota->ComponentesCurriculares;
            $listanotas[] = $nota->PUnidadeMedia;
            $listafj[] = $nota->PUnidadeFJ;
            $listafnj[] = $nota->PUnidadeFNJ;
            $listaPFAP[] = $nota->PUnidadePFA;
            
            $listanotas2[] = $nota->SUnidadeMedia;
            $listafj2[] = $nota->SUnidadeFJ;
            $listafnj2[] = $nota->SUnidadeFNJ;
            $listaPFAS[] = $nota->SUnidadePFA;

            $listanotas3[] = $nota->TUnidadeMedia;
            $listafj3[] = $nota->TUnidadeFJ;
            $listafnj3[] = $nota->TUnidadeFNJ;
            $listaPFAT[] = $nota->TUnidadePFA;

            $listanotas4[] = $nota->QUnidadeMedia;
            $listafj4[] = $nota->QUnidadeFJ;
            $listafnj4[] = $nota->QUnidadeFNJ;
            $listaPFAQ[] = $nota->QUnidadePFA;

            $mediaanual[] = $nota->MediaAnual;
            $notarecfinal[] = $nota->NotaRecFinal;
            $notafinal[] = $nota->NotaFinal;
        }

        return view('aluno/boletim', [
            'nomedisciplina' => $nomedisciplina,

            'listanotas' => $listanotas,
            'listafj' => $listafj,
            'listafnj' => $listafnj,
            'listaPFAP' => $listaPFAP,

            'listanotas2' => $listanotas2,
            'listafj2' => $listafj2,
            'listafnj2' => $listafnj2,
            'listaPFAS' => $listaPFAS,

            'listanotas3' => $listanotas3,
            'listafj3' => $listafj3,
            'listafnj3' => $listafnj3,
            'listaPFAT' => $listaPFAT,

            'listanotas4' => $listanotas4,
            'listafj4' => $listafj4,
            'listafnj4' => $listafnj4,
            'listaPFAQ' => $listaPFAQ,

            'mediaanual' => $mediaanual,
            'notarecfinal' => $notarecfinal,
            'notafinal' => $notafinal
        ]);
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
