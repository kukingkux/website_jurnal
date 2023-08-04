<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\View;


class UserController extends Controller
{
    

    // public function users()
    // {
    //     $user = User::all();
    //     $count = User::count();

    //     View::share('user', $user);
    //     View::share('count', $count);
        
    // }

    protected function create(Request $data)
    {

        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    public function deleteuser($id) {
        $user = User::where('id',$id)->firstOrFail();
        $user->delete();
        return redirect('user')->with('status',"Hapus data berhasil!");
    }

    
}
