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
        global $listanotas; 
        $listanotas = [
            [], 
            [], 
            [], 
            []
        ];
        global $listafj; $listafj = [];
        global $listafnj; $listafnj = [];
        global $listaPFAP; $listaPFAP = [];
        global $listaPFAS; $listaPFAS = [];
        global $listaPFAT; $listaPFAT = [];
        global $listaPFAQ; $listaPFAQ =[];
        global $mediaanual;
        global $notarecfinal;
        global $notafinal;

        $notas = DB::table('desempenhoescolar')->get();
        $listanotasa = DB::table('desempenhoescolar')->select(['PUnidadeMedia', 'SUnidadeMedia', 'TUnidadeMedia', 'QUnidadeMedia'])->get();
        $listafaltasBD = DB::table('desempenhoescolar')->select(['PUnidadeFJ', 'SUnidadeFJ', 'TUnidadeFJ', 'QUnidadeFJ'])->get();
        $listafnjBD = DB::table('desempenhoescolar')->select(['PUnidadeFNJ', 'SUnidadeFNJ', 'TUnidadeFNJ', 'QUnidadeFNJ'])->get();
        $mediaanualBD = DB::table('desempenhoescolar')->select(['MediaAnual'])->get();
        $notarecfinalBD = DB::table('desempenhoescolar')->select(['NotaRecFinal'])->get();
        $notafinalBD = DB::table('desempenhoescolar')->select(['NotaFinal'])->get();

        $arrayListanotasa = json_decode(json_encode($listanotasa), true);
        $arrayListafaltasBD = json_decode(json_encode($listafaltasBD), true);
        $arrayListafnjBD = json_decode(json_encode($listafnjBD), true);
        $arrayMediaanualBD = json_decode(json_encode($mediaanualBD), true);
        $arrayNotarecfinalBD = json_decode(json_encode($notarecfinalBD), true);
        $arrayNotafinalBD = json_decode(json_encode($notafinalBD), true);

        foreach ($arrayListanotasa as $listanotasa) {
            $listanotas[] = $listanotasa;
        }
        foreach ($arrayListafaltasBD as $listafaltas) {
            $listafj[] = $listafaltas;
        }
        foreach ($arrayListafnjBD as $listafnj) {
            $listafnj[] = $listafnj;
        }
        $mediaanual = $arrayMediaanualBD[0]["MediaAnual"];
        $notarecfinal = $arrayNotarecfinalBD[0]["NotaRecFinal"];
        $notafinal = $arrayNotafinalBD[0]["NotaFinal"];

        foreach ($notas as $nota) {
            $nomedisciplina[] = $nota->ComponentesCurriculares;
            $listaPFAP[] = $nota->PUnidadePFA;
            $listaPFAS[] = $nota->SUnidadePFA;
            $listaPFAT[] = $nota->TUnidadePFA;
            $listaPFAQ[] = $nota->QUnidadePFA;
            $notarecfinal[] = $nota->NotaRecFinal;
            $notafinal[] = $nota->NotaFinal;
        }

        var_dump($arrayListanotasa);

        return view('aluno/boletim', [
            'nomedisciplina' => $nomedisciplina,
            'listanotasa' => $listanotasa,
            'listanotas' => $listanotas,
            'listafj' => $listafj,
            'listafnj' => $listafnj,
            'listaPFAP' => $listaPFAP,
            'listaPFAS' => $listaPFAS,
            'listaPFAT' => $listaPFAT,
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
