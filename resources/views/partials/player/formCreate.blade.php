@include('layouts.flash')

<section class="w-50 mx-auto m-5">
    <div class="bg-primary py-5">

        <h1 class="text-center text-white">Créer un Joueur</h1>

        <form class="w-75 mx-auto" action="/player" method="POST">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nom</label>
                <input type="text" name="nom" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Prénom</label>
                <input type="text" name="prenom" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Age</label>
                <input type="number" name="age" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Tel</label>
                <input type="text" name="tel" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">email</label>
                <input type="text" name="email" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">genre</label>
                <input type="text" name="genre" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Pays</label>
                <input type="text" name="pays" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
            </div>
            <label for="" class="form-label">Rôle</label>
            <select name="role_id" class="form-select mb-3" aria-label="Default select example">
                <option selected>Selectionne le rôle</option>
                @foreach ($roles as $role)
                    <option value={{ $role->id }}>{{ $role->nom }}</option>
                @endforeach
            </select>
            <label for="" class="form-label">Club</label>
            <select name="club_id" class="form-select mb-3" aria-label="Default select example">
                <option selected>Selectionne le club</option>
                @foreach ($clubs as $club)
                    <option value={{ $club->id }}>{{ $club->nom }}</option>
                @endforeach
            </select>
            <label for="" class="form-label">Photo</label>
            <select name="photo_id" class="form-select" aria-label="Default select example">
                <option selected>Selectionne la photo</option>
                @foreach ($photos as $photo)
                    <option value={{ $photo->id }}>{{ $photo->src }}</option>
                @endforeach
            </select>
            <button type="submit" class="btn btn-info mt-3">Créer</button>
        </form>
    </div>
</section>
