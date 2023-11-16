<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cardapio;
use Illuminate\Support\Facades\DB;

class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cardapios = Cardapio::all();
        return view('aluno.cardapio', ['cardapios' => $cardapios]);
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
        /*global $SegundaBebidaManha; $SegundaBebidaManha = [];

        $cardSeg = DB::table('cardapios')->select([
            'SegundaBebidaManha',
            'SegundaComidaManha',
            'SegundaBebidaAlmoço',
            'SegundaComidaAlmoço',
            'SegundaBebidaTarde',
            'SegundaComidaTarde'
        ])->get();

        $encodecardSeg = json_encode($cardSeg, true);

        $arraycardSeg = json_decode($encodecardSeg, true);

        $SegundaBebidaManha[] = $arraycardSeg[0]["SegundaBebidaManha"];*/
        
        $cardapios = Cardapio::all();
        return view('aluno.cardapio', ['cardapios' => $cardapios]);
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
