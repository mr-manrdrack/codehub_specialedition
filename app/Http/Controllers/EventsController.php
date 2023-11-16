<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event;

class EventsController extends Controller
{
    public function index()
    {
        $eventos = Event::all();

        return view('aluno.eventos', ['eventos' => $eventos]);
    }
    
    public function indexp()
    {
        $eventos = Event::all();

        return view('professor.eventos', ['eventos' => $eventos]);
    }


    public function create(){

       //
    }
}