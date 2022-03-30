<?php

use App\Http\Controllers\ClubController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\PlayerController;
use App\Models\Player;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $playerTeam = DB::table('players')->orderByRaw('genre')->get();
    return view('welcome', compact('playerTeam'));
});


Route::resource('player', PlayerController::class);
Route::resource('club', ClubController::class);
Route::resource('photo', PhotoController::class);



