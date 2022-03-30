@include('layouts.flash')
<section class="w-50 mx-auto m-5">
    <div class="bg-secondary py-5">

        <h1 class="text-center text-white">Modifier la fiche d'un joueur</h1>

        <form class="w-75 mx-auto" action="/player/{{ $player->id }} " method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nom</label>
                <input type="text" name="nom" value="{{ $player->nom }} " class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Prénom</label>
                <input type="text" name="prenom" value="{{ $player->prenom }} " class="form-control"
                    id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Age</label>
                <input type="text" name="age" value="{{ $player->age }} " class="form-control"
                    id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Tel</label>
                <input type="text" name="tel" value="{{ $player->tel }} " class="form-control"
                    id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">email</label>
                <input type="text" name="email" value="{{ $player->email }} " class="form-control"
                    id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">genre</label>
                <input type="text" name="genre" value="{{ $player->genre }} " class="form-control"
                    id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Pays</label>
                <input type="text" name="pays" value="{{ $player->pays }} " class="form-control"
                    id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Rôle</label>
                <input type="text" name="role" value="{{ $player->role }} " class="form-control"
                    id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <select name="club_id" class="form-select mb-3" aria-label="Default select example">
                <option selected>Selectionne le club</option>
                @foreach ($clubs as $club)
                    {{-- <option value={{ $club->nom }} @if ($club->nom == $club->nom) ? selected : null @endif>
                        {{ $club->nom }} </option> --}}
                    <option value={{ $club->id }}>{{ $club->nom }}</option>
                @endforeach
            </select>
            <select name="photo_id" class="form-select" aria-label="Default select example">
                <option selected>Selectionne la photo</option>
                @foreach ($photos as $photo)
                    {{-- <option value={{ $photo->nom }} @if ($photo->nom == $photo->nom) ? selected : null @endif>
                        {{ $photo->nom }} </option> --}}

                    <option value={{ $photo->id }}>{{ $photo->src }}</option>
                @endforeach
            </select>
            <button type="submit" class="btn btn-info mt-3">Modifier</button>
        </form>
    </div>
</section>
