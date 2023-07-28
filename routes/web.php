<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginRegisterController;
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


Route::get('/history', function() {
    return view('history');
});


Route::get('/', function () {

})->middleware('auth');

Route::resource('/agenda', AgendaController::class);

Route::get('/history', 'App\Http\Controllers\AgendaController@history');

Route::get('/agenda', 'App\Http\Controllers\GroupsController@group');





Route::controller(LoginRegisterController::class)->group(function() {
    Route::get('/register', 'register')->name('register');
    Route::post('/store', 'store')->name('store');
    Route::get('/login', 'login')->name('login');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    Route::get('/dashboard', 'dashboard')->name('dashboard');
    Route::get('/logout', 'logout')->name('logout');
});


Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');



// Q U E R Y

Route::get('delete/{id}','App\Http\Controllers\AgendaController@delete');
Route::get('{id}/edit','App\Http\Controllers\AgendaController@edit');
Route::post('update/{id}', 'App\Http\Controllers\AgendaController@update');