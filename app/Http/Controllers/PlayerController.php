<?php

namespace App\Http\Controllers;

use App\Models\Player;
use App\Http\Requests\StorePlayerRequest;
use App\Http\Requests\UpdatePlayerRequest;
use App\Models\Club;
use App\Models\Photo;
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
        $clubs = Club::all();
        $photos = Photo::all();
        return view('pages.createPlayer', compact('clubs', 'photos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePlayerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
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
        $clubs = Club::all();
        $photos = Photo::all();
        return view('pages.editPlayer', compact('player', 'clubs', 'photos'));
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
        $player->nom = $request->nom;
        $player->prenom = $request->prenom;
        $player->age = $request->age;
        $player->tel = $request->tel;
        $player->email = $request->email;
        $player->genre = $request->genre;
        $player->pays = $request->pays;
        $player->role = $request->role;
        $player->role = $request->role;
        if ($request->club_id == "null") {
            $player->club_id = null;
        } else {
            $player->club_id = $request->equipe_id;
        }

        $player->photo_id = $request->photo_id;
        $player->save();
        return redirect('/player/'.$player->id.'/edit')->with('info', 'Info joueur modifiées');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function destroy(Player $player)
    {
        $personnes = array('aicha.jpg', 'alexe.jpg', 'alice.jpg', 'barbara.jpg', 'benja.jpg', 'bernadette.jpg', 'bibou.jpg', 'bruno.jpg', 'cathy.jpg', 'charles.jpg', 'didier.jpg', 'esteban.jpg', 'farid.jpg', 'ines.jpg', 'jean.jpg', 'jef.jpg', 'jenny.jpg', 'jimy.jpg', 'joelle.jpg', 'julie.jpg', 'kevin.jpg', 'kim.jpg', 'kimy.jpg', 'leila.jpg', 'magali.jpg', 'marc.jpg', 'margaux.jpg', 'mathieu.jpg', 'michele.jpg', 'nadia.jpg', 'nathalie.jpg', 'pierre.jpg', 'sophie.jpg', 'steph.jpg', 'stephane.jpg', 'steve.jpg', 'tom.jpg', 'victor.jpg');
        if (!(in_array($player->photo_id, $personnes) )) {
            Storage::delete('public/'.$player->photo->src);
        }

        $player->delete();
        return redirect('/player')->with('danger', 'Joueur supprimé');
    }
}
