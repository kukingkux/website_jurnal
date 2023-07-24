<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgendaController;

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
    return view('dashboard');
});

Route::get('/history', function() {
    return view('history');
});

Route::get('/agenda', function() {
    return view('agenda');
});
Route::get('/dash2', function() {
    return view('dashboard2');
});

Route::resource('/agenda', AgendaController::class);

Route::get('/history', 'App\Http\Controllers\AgendaController@history');


