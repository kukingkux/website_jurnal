<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\GroupsController;

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

Route::get('/', function () {

})->middleware('auth');

// Middleware
// Route::middleware(['auth', 'isAdmin'])->group(function() {
//     Route::get('/admin', function() {
//         return view('admin.dashboard');
//     })->name('dashboard');
// });



Route::group(['middleware' => ['auth','ceklevel:1']], function() {
    // Route::get('/dashboard', 'App\Http\Controllers\HomeController@index');
    Route::get('/admin', 'App\Http\Controllers\HomeController@adminpage');
    Route::get('/user', 'App\Http\Controllers\UserController@users');
    Route::get('/attendance', 'App\Http\Controllers\LeavesController@attendanceEmployee');
    Auth::routes(['register' => true]);
});
Route::group(['middleware' => ['auth','ceklevel:0,1']], function() {
    Route::get('/dashboard', 'App\Http\Controllers\HomeController@index');
    Route::get('/history', 'App\Http\Controllers\AgendaController@history');
    Route::resource('/agenda', AgendaController::class);
    Route::get('/agenda', 'App\Http\Controllers\GroupsController@group');
    
});

Auth::routes(['register' => false]);

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');


// Q U E R Y

Route::get('delete/{id}','App\Http\Controllers\AgendaController@delete');

Route::get('{id}/edit','App\Http\Controllers\AgendaController@edit');
Route::post('update/{id}', 'App\Http\Controllers\AgendaController@update');
Route::post('create', 'App\Http\Controllers\UserController@create');

Route::get('deleteuser/{id}','App\Http\Controllers\UserController@deleteuser');