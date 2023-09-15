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
        $groups = Groups::all();
        return view('agenda', compact('groups'));
    }

    public function index()
    {
        $groups = Groups::all();
        return view('admin.groups', compact('groups'));
    }

    public function create()
    {
        return view('admin.modal.create_groups');
    }

    public function store(Request $request)
    {
        $group = Groups::create($request->all());

        $group -> save();

        return to_route('admin.groups.index');
    }

    public function update(Request $request, Groups $group)
    {
        $validated = $request->validate(['name' => 'required']);
        $group->update($validated);

        return to_route('admin.groups.index');
    }

    public function destroy(Groups $group)
    {
        $group->delete();
        return back();
    }
}
