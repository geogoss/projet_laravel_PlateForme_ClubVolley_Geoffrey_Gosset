@extends('layouts.app')

@section('content')
<main>
    <div class="container w-100  text-dark">
        <h1 class="text-center my-5">Create clubs</h1>
        <ul class="w-100">
            @foreach ($errors->all() as $message)
            <li class="text-dark  text-center" style="list-style: none"><i
                    class="fas fa-exclamation-triangle"></i>{{$message}}</li>
            @endforeach
        </ul>
        <form class=" d-flex w-100 justify-content-around pt-5" action="/club" method="post"
            enctype="multipart/form-data">
            @csrf
            <div class="w-25">
                <div class="mb-3">
                    <label class="form-label">Nom</label>
                    <input type="text" class="form-control" name="nom">
                </div>

                <div class="mb-3">
                    <label class="form-label">Continent : </label>
                    <select name="continent" class="form-control">
                        <option value="europe">Europe</option>
                        <option value="amerique">Amérique</option>
                        <option value="afrique">Afrique</option>
                        <option value="asie">Asie</option>
                        <option value="oceanie">Océanie</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Pays</label>
                    <input type="text" class="form-control" name="pays">
                </div>

                <div class="mb-3">
                    <label class="form-label">Ville</label>
                    <input type="text" class="form-control" name="ville">
                </div>

                <div class="mb-3">
                    <label class="form-label">Nombre de joueur : </label>
                    <select name="nombre" class="form-control">
                        <option value="1">1/7</option>
                        <option value="2">2/7</option>
                        <option value="3">3/7</option>
                        <option value="4">4/7</option>
                        <option value="5">5/7</option>
                        <option value="6">6/7</option>
                        <option value="7">7/7</option>
                    </select>
                </div>
            </div>

            <div class="w-25">
                <div class="mb-3">
                    <label class="form-label">AV</label>
                    <select name="AV" class="form-control">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">CE</label>
                    <select name="CE" class="form-control">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">AR</label>
                    <select name="AR" class="form-control">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">RP</label>
                    <select name="RP" class="form-control">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                    </select>
                </div>


                <button type="submit" class="btn btn-success" style="margin-top: 20px"><i
                        class="fa fa-check"></i>Créer</button>
            </div>
        </form>
    </div>
</main>
@endsection