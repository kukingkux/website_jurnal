<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Agenda;
use App\User;

class AgendaController extends Controller
{
    public function history()
    {
        $agendas = Agenda ::all();
        return view('history', compact('agendas'));
    }

     public function store(Request $request)
    {
        $agenda = Agenda ::create($request->all());
        $agenda -> save();

        return redirect('agenda');
    }

    public function create(Request $request) {
 return view('agenda', [
            "title" => "Agenda"
        ]);
    }

    public function index(Request $request) {
        return view('agenda', ["title" => "Agenda"]);
    }
}
