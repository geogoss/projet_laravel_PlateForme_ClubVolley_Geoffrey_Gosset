<?php

use App\Http\Controllers\ClubController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\PlayerController;
use App\Models\Club;
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

     //Définir 2 var avec chaque table
     $clubs = Club::all();
     $players = Player::all();

     //joueurs sans club random
     $noClub = $players->where('club_id', '==', null);
     if (count($noClub) > 4) {
         $noClubRandom = $noClub->random(4); 
     } else {
         $noClubRandom = $noClub;
     }
     
     //joueurs avec club
     $avecClub = $players->where('club_id', '!=', null);
     if (count($avecClub) > 4) {
         $avecClubRandom = $avecClub->random(4); 
     } else {
         $avecClubRandom = $avecClub;
     }
     
     //equipe europe
     $europeClub = $clubs->where('continent', '=', 'europe');
     //equipe non europe
     $noEuropeClub = $clubs->where('continent', '!=', 'europe');

     //joueur Femme avec équipe random
     $femme = $players->where('genre', '=', 'Femme')->where('club_id', '!=', null)->random(5);
     //->random(1)
     
     // joueur Homme avec équipe
     $homme = $players->where('genre', '=', 'Homme')->where('club_id', '!=', null)->random(5);


    //  pays joueurs = pays équipe
     

    return view('welcome', compact('players', 'clubs', 'noClub', 'noClubRandom', 'avecClub', 'avecClubRandom', 'europeClub', 'noEuropeClub', 'femme', 'homme' ));
});

// 'playerTeam', 'playerTeam1', 'playerTeam2',

Route::resource('player', PlayerController::class);
Route::resource('club', ClubController::class);
Route::resource('photo', PhotoController::class);

Route::get('/team', function() {
    $clubs = Club::paginate(6);
    $clubTot = Club::all();
    // $occupe = $clubTot["AV"] + $clubTot["AR"] + $clubTot["CE"] + $clubTot["RP"];
    return view('partials.team.afficheTeam', compact('clubs', 'clubTot'));
});

