@extends('layouts.app')

@section('content')
@include('partials.nav')
<main>
    <div class="container w-100  text-white">
        <h1 class="text-center my-5">Edit clubs</h1>

        <form class=" d-flex w-100 justify-content-around pt-5" action={{ route('club.update', $club->id) }}
            method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="w-25">
                <div class="mb-3">
                    <label class="form-label">Nom</label>
                    <input type="text" class="form-control" name="nom" value="{{$club->nom}}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Continent</label>
                    <select name="continent_id" class="form-control">
                        <option value="{{$club->continent->id}}">{{$club->continent->nom}}</option>
                        @foreach ($continents as $continent)
                        <option value="{{$continent->id}}">{{$continent->nom}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Pays</label>
                    <input type="text" class="form-control" name="pays" value="{{$club->pays}}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Ville</label>
                    <input type="text" class="form-control" name="ville" value="{{$club->ville}}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Nombre de joueur : </label>
                    <select name="max" class="form-control">
                        <option value="{{$club->max}}">{{$club->max}}/7</option>
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
                    <label class="form-label">ATT</label>
                    <select name="ATT" class="form-control">
                        <option value="{{$club->ATT}}">{{$club->ATT}}</option>
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
                    <label class="form-label">CT</label>
                    <select name="CT" class="form-control">
                        <option value="{{$club->CT}}">{{$club->CT}}</option>
                        <option value="1">1</option>
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
                    <label class="form-label">DC</label>
                    <select name="DC" class="form-control">
                        <option value="{{$club->DC}}">{{$club->DC}}</option>
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
                        <option value="{{$club->RP}}">{{$club->RP}}</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                    </select>
                </div>


                <button type="submit" class="btn validate fs-1 shadow none" style="margin-top: 20px"><i
                        class="fas fa-check"></i></button>
            </div>
        </form>
    </div>
</main>
@endsection