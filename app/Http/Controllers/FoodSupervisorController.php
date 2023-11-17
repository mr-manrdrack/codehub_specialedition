<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cardapio;
use Illuminate\Support\Facades\DB;

class FoodSupervisorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $professores = DB::table('usuarios')->where('cargo', 'professor')->get();

        return view('coordenador.add_refeicao',['professores' => $professores]);
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
        $modelCardapio = new Cardapio;

        $modelCardapio->SegundaBebidaManha = $request->celula2_0;
        $modelCardapio->SegundaComidaManha = $request->celula1_0;
        $modelCardapio->SegundaBebidaAlmoço = $request->celula2_1;
        $modelCardapio->SegundaComidaAlmoço = $request->celula1_1;
        $modelCardapio->SegundaBebidaTarde = $request->celula2_2;
        $modelCardapio->SegundaComidaTarde = $request->celula1_2;

        $modelCardapio->TerçaBebidaManha = $request->celula4_0;
        $modelCardapio->TerçaComidaManha = $request->celula3_0;
        $modelCardapio->TerçaBebidaAlmoço = $request->celula4_1;
        $modelCardapio->TerçaComidaAlmoço = $request->celula3_1;
        $modelCardapio->TerçaBebidaTarde = $request->celula4_2;
        $modelCardapio->TerçaComidaTarde = $request->celula3_2;

        $modelCardapio->QuartaBebidaManha = $request->celula6_0;
        $modelCardapio->QuartaComidaManha = $request->celula5_0;
        $modelCardapio->QuartaBebidaAlmoço = $request->celula6_1;
        $modelCardapio->QuartaComidaAlmoço = $request->celula5_1;
        $modelCardapio->QuartaBebidaTarde = $request->celula6_2;
        $modelCardapio->QuartaComidaTarde = $request->celula5_2;

        $modelCardapio->QuintaBebidaManha = $request->celula8_0;
        $modelCardapio->QuintaComidaManha = $request->celula7_0;
        $modelCardapio->QuintaBebidaAlmoço = $request->celula8_1;
        $modelCardapio->QuintaComidaAlmoço = $request->celula7_1;
        $modelCardapio->QuintaBebidaTarde = $request->celula8_2;
        $modelCardapio->QuintaComidaTarde = $request->celula7_2;

        $modelCardapio->SextaBebidaManha = $request->celula10_0;
        $modelCardapio->SextaComidaManha = $request->celula9_0;
        $modelCardapio->SextaBebidaAlmoço = $request->celula10_1;
        $modelCardapio->SextaComidaAlmoço = $request->celula9_1;
        $modelCardapio->SextaBebidaTarde = $request->celula10_2;
        $modelCardapio->SextaComidaTarde = $request->celula9_2;
        
        $modelCardapio->save();
        return redirect()->route('add_refeicoes.index');
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
