<?php

namespace App\Http\Controllers;

use App\Models\Club;
use App\Models\Continent;
use App\Http\Requests\StoreClubRequest;
use App\Http\Requests\UpdateClubRequest;

class ClubController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clubs = Club::paginate(6);
        return view ('partials.team.afficheTeam', compact('clubs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $continents = Continent::all();
        return view('partials.team.formCreate', compact('continents'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreClubRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreClubRequest $request)
    {
        $request->validate([
            'nom' => 'required',
            'ville' => 'required',
            'pays' => 'required',
            // 'AV' => 'required | integer',
            // 'AR' => 'required | integer',
            // 'CE' => 'required | integer',
            // 'RP' => 'required | integer',
        ]);
        $club = new Club();
        $club->nom = $request->nom;
        $club->ville = $request->ville;
        $club->pays = $request->pays;
        $club->continent = $request->continent;
        // $club->nombre = $request->AV + $request-> AR + $request-> CE + $request-> RP;
        $club->nombre=$request->nombre;
        $club->AV = $request->AV;
        $club->AR = $request->AR;
        $club->CE = $request->CE;
        $club->RP = $request->RP;
        $club->save();
        return redirect("/club")->with('message', 'Vous avez créé une équipe');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Club  $club
     * @return \Illuminate\Http\Response
     */
    public function show(Club $club)
    {
        return view('partials.team.show', compact('club'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Club  $club
     * @return \Illuminate\Http\Response
     */
    public function edit(Club $club)
    {
        return view('partials.team.formEdit', compact('club'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateClubRequest  $request
     * @param  \App\Models\Club  $club
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateClubRequest $request, Club $club)
    {
        $request->validate([
            'nom' => 'required',
            'ville' => 'required',
            'pays' => 'required',
            'AV' => 'required | integer',
            'AR' => 'required | integer',
            'CE' => 'required | integer',
            'RP' => 'required | integer',
        ]);
        $club = new Club();
        $club->nom = $request->nom;
        $club->ville = $request->ville;
        $club->pays = $request->pays;
        // $club->nombre = $request->AV + $request-> AR + $request-> CE + $request-> RP;
        $club->nombre = $request->nombre;
        $club->AV = $request->AV;
        $club->AR = $request->AR;
        $club->CE = $request->CE;
        $club->RP = $request->RP;
        $club->created_at = now();
        $club->updated_at = now();
        $club->save();

        return redirect()->route('club.index')->with('message', 'Vous avez modifié une équipe');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Club  $club
     * @return \Illuminate\Http\Response
     */
    public function destroy(Club $club)
    {
        $club->delete();
        return redirect()->back()->with('message', 'Vous avez supprimé une équipe');
    }
}
