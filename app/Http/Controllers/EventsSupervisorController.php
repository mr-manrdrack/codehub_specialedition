<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event;

class EventsSupervisorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = Event::all();
        return view('coordenador.eventos',['events' => $events]); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('coordenador.eventos');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $events = new Event;

        $events->titulo = $request->titulo;
        $events->horario = $request->horario ? $request->horario : '0001-01-01 00:00:00';
        $events->descricao = $request->descricao;
        //$event->arquivo = $request->arquivo;

        if($request->hasFile('image') && $request->file('image')->isValid()) {
            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension; 

            $requestImage->move(public_path('img/events'), $imageName);

            $events->image = $imageName;
        }

        $events -> save();

        return redirect('/coordenador/eventos');
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
