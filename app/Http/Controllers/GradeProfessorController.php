<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class GradeProfessorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('professor.horario');
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
    public function show()
    {
        global $primeirasAulas; $primeirasAulas = [];
        global $segundasAulas; $segundasAulas = [];
        global $terceirasAulas; $terceirasAulas = [];
        global $quartasAulas; $quartasAulas = [];
        global $quintasAulas; $quintasAulas = [];
        global $sextasAulas; $sextasAulas = [];
        global $setimasAulas; $setimasAulas = [];
        global $oitavasAulas; $oitavasAulas = [];
        global $nonasAulas; $nonasAulas = [];

        $horarioseg = DB::table('horarios')->select([
            'primeiraAula', 
            'segundaAula',
            'terceiraAula',
            'quartaAula',
            'quintaAula',
            'sextaAula',
            'setimaAula',
            'oitavaAula',
            'nonaAula'])->where('dia','Segunda')->first();
        $horarioter = DB::table('horarios')->select([
            'primeiraAula', 
            'segundaAula',
            'terceiraAula',
            'quartaAula',
            'quintaAula',
            'sextaAula',
            'setimaAula',
            'oitavaAula',
            'nonaAula'])->where('dia', 'Terça')->get();
        $horarioqua = DB::table('horarios')->select([
            'primeiraAula', 
            'segundaAula',
            'terceiraAula',
            'quartaAula',
            'quintaAula',
            'sextaAula',
            'setimaAula',
            'oitavaAula',
            'nonaAula'])->where('dia', 'Quarta')->get();
        $horarioqui = DB::table('horarios')->select([
            'primeiraAula', 
            'segundaAula',
            'terceiraAula',
            'quartaAula',
            'quintaAula',
            'sextaAula',
            'setimaAula',
            'oitavaAula',
            'nonaAula'])->where('dia', 'Quinta')->get();
        $horariosex = DB::table('horarios')->select([
            'primeiraAula', 
            'segundaAula',
            'terceiraAula',
            'quartaAula',
            'quintaAula',
            'sextaAula',
            'setimaAula',
            'oitavaAula',
            'nonaAula'])->where('dia', 'Sexta')->get();
        
        $encodehorarioseg = json_encode($horarioseg, true);
        $encodehorarioter = json_encode($horarioter, true);
        $encodehorarioqua = json_encode($horarioqua, true);
        $encodehorarioqui = json_encode($horarioqui, true);
        $encodehorariosex = json_encode($horariosex, true);

        $arrayhorarioseg = json_decode($encodehorarioseg, true);
        $arrayhorarioter = json_decode($encodehorarioter, true);
        $arrayhorarioqua = json_decode($encodehorarioqua, true);
        $arrayhorarioqui = json_decode($encodehorarioqui, true);
        $arrayhorariosex = json_decode($encodehorariosex, true);

        
        $primeirasAulas[] = $arrayhorarioseg["primeiraAula"];
        $primeirasAulas[] = $arrayhorarioter[0]["primeiraAula"];
        $primeirasAulas[] = $arrayhorarioqua[0]["primeiraAula"];
        $primeirasAulas[] = $arrayhorarioqui[0]["primeiraAula"];
        $primeirasAulas[] = $arrayhorariosex[0]["primeiraAula"];

        $segundasAulas[] = $arrayhorarioseg["segundaAula"];
        $segundasAulas[] = $arrayhorarioter[0]["segundaAula"];
        $segundasAulas[] = $arrayhorarioqua[0]["segundaAula"];
        $segundasAulas[] = $arrayhorarioqui[0]["segundaAula"];
        $segundasAulas[] = $arrayhorariosex[0]["segundaAula"];

        $terceirasAulas[] = $arrayhorarioseg["terceiraAula"];
        $terceirasAulas[] = $arrayhorarioter[0]["terceiraAula"];
        $terceirasAulas[] = $arrayhorarioqua[0]["terceiraAula"];
        $terceirasAulas[] = $arrayhorarioqui[0]["terceiraAula"];
        $terceirasAulas[] = $arrayhorariosex[0]["terceiraAula"];

        $quartasAulas[] = $arrayhorarioseg["quartaAula"];
        $quartasAulas[] = $arrayhorarioter[0]["quartaAula"];
        $quartasAulas[] = $arrayhorarioqua[0]["quartaAula"];
        $quartasAulas[] = $arrayhorarioqui[0]["quartaAula"];
        $quartasAulas[] = $arrayhorariosex[0]["quartaAula"];

        $quintasAulas[] = $arrayhorarioseg["quintaAula"];
        $quintasAulas[] = $arrayhorarioter[0]["quintaAula"];
        $quintasAulas[] = $arrayhorarioqua[0]["quintaAula"];
        $quintasAulas[] = $arrayhorarioqui[0]["quintaAula"];
        $quintasAulas[] = $arrayhorariosex[0]["quintaAula"];
        
        $sextasAulas[] = $arrayhorarioseg["sextaAula"];
        $sextasAulas[] = $arrayhorarioter[0]["sextaAula"];
        $sextasAulas[] = $arrayhorarioqua[0]["sextaAula"];
        $sextasAulas[] = $arrayhorarioqui[0]["sextaAula"];
        $sextasAulas[] = $arrayhorariosex[0]["sextaAula"];

        $setimasAulas[] = $arrayhorarioseg["setimaAula"];
        $setimasAulas[] = $arrayhorarioter[0]["setimaAula"];
        $setimasAulas[] = $arrayhorarioqua[0]["setimaAula"];
        $setimasAulas[] = $arrayhorarioqui[0]["setimaAula"];
        $setimasAulas[] = $arrayhorariosex[0]["setimaAula"];

        $oitavasAulas[] = $arrayhorarioseg["oitavaAula"];
        $oitavasAulas[] = $arrayhorarioter[0]["oitavaAula"];
        $oitavasAulas[] = $arrayhorarioqua[0]["oitavaAula"];
        $oitavasAulas[] = $arrayhorarioqui[0]["oitavaAula"];
        $oitavasAulas[] = $arrayhorariosex[0]["oitavaAula"];

        $nonasAulas[] = $arrayhorarioseg["nonaAula"];
        $nonasAulas[] = $arrayhorarioter[0]["nonaAula"];
        $nonasAulas[] = $arrayhorarioqua[0]["nonaAula"];
        $nonasAulas[] = $arrayhorarioqui[0]["nonaAula"];
        $nonasAulas[] = $arrayhorariosex[0]["nonaAula"];
    
        
        return view('/professor/horario', [
            'primeirasAulas' => $primeirasAulas,
            'segundasAulas' => $segundasAulas,
            'terceirasAulas' => $terceirasAulas,
            'quartasAulas' => $quartasAulas,
            'quintasAulas' => $quintasAulas,
            'sextasAulas' => $sextasAulas,
            'setimasAulas' => $setimasAulas,
            'oitavasAulas' => $oitavasAulas,
            'nonasAulas' => $nonasAulas
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
