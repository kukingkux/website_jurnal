<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Date;

class LeavesController extends Controller
{
    

    public function attendanceDate() {
        
         $attendance = DB::table('agenda')
        ->join('users', 'users.id', '=', 'agenda.user_id')->get()
        ->where('id', $userId);
        
        return view('history', ['agendas' => $agendas]);
    }

    // public function filterAttendance(Request $request)
    // {
    //     $month = $request->input('month');
    //     $year = $request->input('year');
    //     $day = $request->input('day');

    //     $filteredDates = Date::select($month, $year)->where('day', $day)->get();
    // }

    // public function index() {
    //     $date = Date::all();

    //     return view('admin.attendance', compact('date'));
    // }
}
