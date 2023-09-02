<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Groups;
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
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role_id' => $data['role_id'],
            'group_id' => $data['group_id'],
            'office_id' => $data['office_id'],
            'position_id' => $data['position_id'],
            'birthdate' => $data['birthdate'],
            'gender' => $data['gender'],
            'phone_number' => $data['phone_number'],
            'address' => $data['address'],
            'latest_education' => $data['latest_education'],
            'identity_number' => $data['identity_number'],
            'start_date' => $data['start_date'],
            'end_date' => $data['end_date'],
        ]);
    }

    public function deleteuser($id) {
        $user = User::where('id',$id)->firstOrFail();
        $user->delete();
        return redirect('user')->with('status',"Hapus data berhasil!");
    }

    public function user() {
        $userlistgroup = Groups::with('user')->get();
        $user = User::all();

        return view('admin.users', compact( 'user', 'userlistgroup'));
    }

    public function agenda(Request $request) {
        $usergroups = Groups::with('user')->get();
        $usergroup = User::all();

        return view('agenda', compact( 'agenda', 'agendagroup'));
    }

    public function index(){



    }


}
