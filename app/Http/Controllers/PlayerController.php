<?php

namespace App\Http\Controllers;

use App\Models\Player;
use App\Http\Requests\StorePlayerRequest;
use App\Http\Requests\UpdatePlayerRequest;
use App\Models\Club;
use App\Models\Photo;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $players = Player::all();
        $photos = Photo::all();
        return view('pages.player', compact('players', 'photos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::all();
        $clubs = Club::all();
        $photos = Photo::all();
        return view('pages.createPlayer', compact('clubs', 'photos', 'roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePlayerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         //Chope l'equipe
         $club = Club::find($request->club_id);
         $occupe = $club->AV + $club->CE + $club->AR + $club->RP;
 
         //switch pour +1 le role choisi au niveau de l'équipe
         switch ($request->role_id) {
             case 1:
                 $club->AV+=1;
                 $club->save();
                 break;
             case 2:
                 $club->AR+=1;
                 $club->save();
                 break;
             case 3:
                 $club->CE+=1;
                 $club->save();            
                 break;
             case 4:
                 $club->RP+=1;
                 $club->save();
                 break;
         }
 
         //Condition pour vérifier le nombre de joueur dans l'équipe pour ne pas dépasser le max défini !
         if ($occupe >= $club->nombre) {
             return redirect()->back()->with('warning', $club->nom . ' : complet, veuillez choisir une autre equipe');
         } else {
             
             //Création du joueur
             $store = new Player();
        $store->nom = $request->nom;
        $store->prenom = $request->prenom;
        $store->age = $request->age;
        $store->tel = $request->tel;
        $store->email = $request->email;
        $store->genre = $request->genre;
        $store->pays = $request->pays;
        $store->role_id = $request->role_id;

        if ($request->club_id == "null") {
            $store->club_id = null;
        } else {
            $store->club_id = $request->equipe_id;
        }

        $store->photo_id = $request->photo_id;
        $store->save();
        return redirect('/player/create')->with('success', 'Joueur Created');
    }
    
    
    // return redirect()->route('joueur.index')->with('success', 'Joueur bien ajouté à ' . $equipe->nom);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function show(Player $player)
    {
        return view('pages.showPlayer', compact('player'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function edit(Player $player)
    {
        $roles = Role::all();
        $clubs = Club::all();
        $photos = Photo::all();
        return view('pages.editPlayer', compact('player', 'clubs', 'photos', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePlayerRequest  $request
     * @param  \App\Models\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePlayerRequest $request, Player $player)
    {

        $equipeActuelle = Club::find($player->club_id);
        $equipeDepart = Club::find($request->club_id);
        $occupe = $equipeDepart->AV + $equipeDepart->CE + $equipeDepart->AR + $equipeDepart->RP;

        //verifie si on change le role du joueur
        if ($player->role_id != $request->role_id) {
            // -1 dans le post dans l'equipe qu'il etait
            switch ($player->role_id) {
                case 1:
                    $equipeActuelle->AV-=1;
                    $equipeActuelle->save();
                    break;
                case 2:
                    $equipeActuelle->CE-=1;
                    $equipeActuelle->save();
                    break;
                case 3:
                    $equipeActuelle->AR-=1;
                    $equipeActuelle->save();            
                    break;
                case 4:
                    $equipeActuelle->RP-=1;
                    $equipeActuelle->save();
                    break;
            }
            //rajouter +1 dans le nv role dans son new equipe/son equipe actuelle
            switch ($request->role_id) {
                case 1:
                    $equipeDepart->AV+=1;
                    $equipeDepart->save();
                    break;
                case 2:
                    $equipeDepart->CE+=1;
                    $equipeDepart->save();
                    break;
                case 3:
                    $equipeDepart->AR+=1;
                    $equipeDepart->save();            
                    break;
                case 4:
                    $equipeDepart->RP+=1;
                    $equipeDepart->save();
                    break;
            }
        // si le role est le meme, on rentre dans le else
        } else {   
            //switch -1 pour le post de l'equipe d'ou il vient
            switch ($player->role_id) {
                case 1:
                    $equipeActuelle->AV-=1;
                    $equipeActuelle->save();
                    break;
                case 2:
                    $equipeActuelle->CE-=1;
                    $equipeActuelle->save();
                    break;
                case 3:
                    $equipeActuelle->AR-=1;
                    $equipeActuelle->save();            
                    break;
                case 4:
                    $equipeActuelle->RP-=1;
                    $equipeActuelle->save();
                    break;
            }     
            //switch +1 pour le post dans l'equipe ou il part          
            switch ($request->role_id) {
                case 1:
                    $equipeDepart->ATT+=1;
                    $equipeDepart->save();
                    break;
                case 2:
                    $equipeDepart->CT+=1;
                    $equipeDepart->save();
                    break;
                case 3:
                    $equipeDepart->DC+=1;
                    $equipeDepart->save();            
                    break;
                case 4:
                    $equipeDepart->RP+=1;
                    $equipeDepart->save();
                    break;
            }
        }

        //notre logique de base avec crud classique 
        if ($occupe >= $equipeDepart->nombre) {
            return redirect()->back()->with('warning', $equipeDepart->nom . ' : complet, veuillez choisir une autre equipe');
        } else {
    
            $player->nom = $request->nom;
            $player->prenom = $request->prenom;
            $player->age = $request->age;
            $player->tel = $request->tel;
            $player->email = $request->email;
            $player->genre = $request->genre;
            $player->pays = $request->pays;
            $player->role_id = $request->role_id;
            
            if ($request->club_id == "null") {
                $player->club_id = null;
            } else {
                $player->club_id = $request->equipe_id;
            }
            
            $player->photo_id = $request->photo_id;
            $player->save();
            return redirect('/player/'.$player->id.'/edit')->with('info', 'Info joueur modifiées');
        }

       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function destroy(Player $player)
    {
       
        //delete au niveau du nombre de joueurs dans l'équipe
        $equipe = Club::find($player->equipe_id);
        switch ($player->role_id) {
            case 1:
                $equipe->AV-=1;
                $equipe->save();
                break;
            case 2:
                $equipe->CE-=1;
                $equipe->save();
                break;
            case 3:
                $equipe->AR-=1;
                $equipe->save();            
                break;
            case 4:
                $equipe->RP-=1;
                $equipe->save();
                break;
        }

        $player->delete();
        return redirect('/player')->with('danger', 'Joueur supprimé');
    }
}
