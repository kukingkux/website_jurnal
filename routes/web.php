<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Date;
use App\Models\Groups;
use App\Models\Agenda;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\GroupsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LeavesController;
use App\Http\Controllers\API\AuthController;

use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// Middleware
// Route::middleware(['auth', 'isAdmin'])->group(function() {
//     Route::get('/admin', function() {
//         return view('admin.dashboard');
//     })->name('dashboard');
// });


Route::middleware('auth:sanctum')->group(function() {
    Route::post('register', [AuthController::class, 'register']);
    Route::post('login', [AuthController::class, 'login']);
    Route::get('login', [AuthController::class, 'login']);
    Route::get('logout', [AuthController::class, 'logout']);
    Route::get('/', function () {
    return redirect('admin');
    // Only authenticated users may enter...
});
});


Route::group(['middleware' => ['auth','ceklevel:1']], function() {
    // Route::get('/dashboard', 'App\Http\Controllers\HomeController@index');
    Route::get('/admin', 'App\Http\Controllers\HomeController@adminpage')->middleware('auth');
    Route::get('/user', 'App\Http\Controllers\UserController@user');

    Route::get('/attendance', [LeavesController::class, 'attendance'])->name('attendance');
    // Route::get('/attendance', 'App\Http\Controllers\LeavesController@filterAttendance');



    Auth::routes(['register' => true]);
});
Route::group(['middleware' => ['auth','ceklevel:0,1']], function() {
    Route::get('/dashboard', 'App\Http\Controllers\HomeController@index');
    Route::get('/history', 'App\Http\Controllers\AgendaController@history');
    Route::get('/agenda', 'App\Http\Controllers\AgendaController@index');
    Route::resource('/agenda', AgendaController::class);
    Route::get('/agenda', 'App\Http\Controllers\GroupsController@group');
});

Auth::routes(['register' => true]);

 Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
//Route::get('logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');

// Q U E R Y

Route::get('delete/{id}','App\Http\Controllers\AgendaController@delete');

Route::get('{id}/edit','App\Http\Controllers\AgendaController@edit');
Route::post('update/{id}', 'App\Http\Controllers\AgendaController@update');
Route::post('create', 'App\Http\Controllers\UserController@create');

Route::get('deleteuser/{id}','App\Http\Controllers\UserController@deleteuser');



// VIEW

view()->composer(['*'], function ($view) {
    $users = User::all();
    $count_user = User::count();
    $count_member = User::where('role_id', '0')->count();
    $count_admin = User::where('role_id', '1')->count();
    $groups = Groups::all();

    $view->with('users', $users)
    ->with('groups', $groups)
    ->with('count_user', $count_user)
    ->with('count_member', $count_member)
    ->with('count_admin', $count_admin);

    $userId = Auth::id();
    $currentuser = User::find($userId);
    $view->with('currentuser', $currentuser);

    $month = Date::select('month')->distinct()->get();
    $year = Date::select('year')->distinct()->get();
    $view->with('month', $month)
    ->with('year', $year);

    $agendagroup = Groups::with('agenda')->get();
    $agenda= Agenda::all()->where('user_id', $userId);

    $view->with('agenda', $agenda)
    ->with('agendagroup', $agendagroup);



});
