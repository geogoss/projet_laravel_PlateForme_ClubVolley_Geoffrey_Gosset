<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use App\Http\Requests\StorePhotoRequest;
use App\Http\Requests\UpdatePhotoRequest;
use Illuminate\Support\Facades\Storage;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $photos = Photo::all();
        return view('pages.photo', compact('photos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('pages.createPhoto');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePhotoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePhotoRequest $request)
    {
        $store = new Photo();
        $store->src = $request->file('src')->hashName();
        Storage::put('public', $request->file('src'));
        $store->save();
        return redirect('/photo')->with('success', 'Photo update');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function show(Photo $photo)
    {
        return view('pages.showPhoto', compact('photo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function edit(Photo $photo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePhotoRequest  $request
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePhotoRequest $request, Photo $photo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Photo $photo)
    {
        $personnes = array('aicha.jpg', 'alexe.jpg', 'alice.jpg', 'barbara.jpg', 'benja.jpg', 'bernadette.jpg', 'bibou.jpg', 'bruno.jpg', 'cathy.jpg', 'charles.jpg', 'didier.jpg', 'esteban.jpg', 'farid.jpg', 'ines.jpg', 'jean.jpg', 'jef.jpg', 'jenny.jpg', 'jimy.jpg', 'joelle.jpg', 'julie.jpg', 'kevin.jpg', 'kim.jpg', 'kimy.jpg', 'leila.jpg', 'magali.jpg', 'marc.jpg', 'margaux.jpg', 'mathieu.jpg', 'michele.jpg', 'nadia.jpg', 'nathalie.jpg', 'pierre.jpg', 'sophie.jpg', 'steph.jpg', 'stephane.jpg', 'steve.jpg', 'tom.jpg', 'victor.jpg');
        if (!(in_array($photo->src, $personnes) )) {
            Storage::delete('public/'.$photo->src);
        }
        $photo->delete();
        return redirect('/photo')->with('danger', 'Photo deleted');
    }
}
