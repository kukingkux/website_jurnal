<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Date;

class LeavesController extends Controller
{
    

    public function attendanceDate() {
        
        $month = Date::select('month')->distinct()->get();
        $year = Date::select('year')->distinct()->get();
        $day = Date::select('day')->where('month', '1')->distinct()->get();

        return view('admin.attendance', compact('year', 'month', 'day'));
    }

    // public function index() {
    //     $date = Date::all();

    //     return view('admin.attendance', compact('date'));
    // }
}
