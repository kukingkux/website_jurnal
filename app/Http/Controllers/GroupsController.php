<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Groups;
use App\User;

class GroupsController extends Controller
{
    public function group()
    {
        $groups = Groups ::all();
        return view('agenda', compact('groups'));
    }
}
