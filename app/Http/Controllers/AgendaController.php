<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Agenda;
use App\Models\User;
use DB;
use Auth;


class AgendaController extends Controller
{
    public function history()
    {
        
        $userId = Auth::id();
        
        $agendas = DB::table('agenda')
        ->join('users', 'users.id', '=', 'agenda.user_id')->get()
        ->where('id', $userId);
        
        return view('history', ['agendas' => $agendas]);
    }

     public function store(Request $request)
    {
        $agenda = Agenda::create($request->all());
        $agenda -> save();

        return redirect('agenda');
    }

    public function create(Request $request) {
        return view('agenda', [
            "title" => "Agenda"
        ]);
    }

    public function edit(Request $request, $id) {
        $agendas = Agenda::where('id',$id)->firstOrFail();
        
    }

    public function update(Request $request, $id) {
        $agendas = Agenda::where('id', $id)->firstOrFail();
            $agendas->nama = $request->nama;
            $agendas->sekolah = $request->sekolah;
            $agendas->waktu = $request->waktu;
            $agendas->tanggal = $request->tanggal;
            $agendas->kegiatan = $request->kegiatan;
        $agendas->save();
       
        return redirect('history');
    }

    public function delete($id) {
        $agendas = Agenda::where('id',$id)->firstOrFail();
        $agendas->delete();
        return redirect('history')->with('status',"Hapus data berhasil!");
    }
    

    

    public function index(Request $request) {
        
        

        return view('agenda', [title => 'Agenda']);
    }
}
