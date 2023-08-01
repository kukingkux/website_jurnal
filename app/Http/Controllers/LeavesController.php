<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LeavesController extends Controller
{
    public function attendanceEmployee() {
        return view('admin.attendance');
    }
}
