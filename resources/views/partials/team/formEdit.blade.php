@extends('layouts.app')

@section('content')
    <main>
        <div class="container w-100  text-dark">
            <h1 class="text-center my-5">Edit clubs</h1>

            <form class=" d-flex w-100 justify-content-around pt-5" action={{ route('club.update', $club->id) }}
                method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="w-25">
                    <div class="mb-3">
                        <label class="form-label">Nom</label>
                        <input type="text" class="form-control" name="nom" value="{{ $club->nom }}">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Continent</label>
                        <select name="continent" class="form-control" type="text">
                            <option value="europe" @if ($club->continent == 'europe') ? selected : null @endif>Europe</option>
                            <option value="afrique" @if ($club->continent == 'afrique') ? selected : null @endif>Afrique</option>
                            <option value="amerique" @if ($club->continent == 'amerique') ? selected : null @endif>Amérique</option>
                            <option value="asie" @if ($club->continent == 'asie') ? selected : null @endif>Asie</option>
                            <option value="oceanie" @if ($club->continent == 'oceanie') ? selected : null @endif>Océanie</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Pays</label>
                        <input type="text" class="form-control" name="pays" value="{{ $club->pays }}">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Ville</label>
                        <input type="text" class="form-control" name="ville" value="{{ $club->ville }}">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Nombre de joueur : </label>
                        <select name="nombre" class="form-control">
                            <option value="{{ $club->nombre }}">{{ $club->nombre }}/7</option>
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
                            <option value="{{ $club->AV }}">{{ $club->AV }}</option>
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
                            <option value="{{ $club->CE }}">{{ $club->CE }}</option>
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
                        <label class="form-label">AR</label>
                        <select name="AR" class="form-control">
                            <option value="{{ $club->AR }}">{{ $club->AR }}</option>
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
                            <option value="{{ $club->RP }}">{{ $club->RP }}</option>
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
