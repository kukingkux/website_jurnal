<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class UserController extends Controller
{
    public function users()
    {
        $users = User::all();
        return view('admin.users', compact('users'));
    }

    protected function create(Request $data)
    {

        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    public function deleteuser($id) {
        $users = User::where('id',$id)->firstOrFail();
        $users->delete();
        return redirect('user')->with('status',"Hapus data berhasil!");
    }
}
