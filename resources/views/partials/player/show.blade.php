<section class="w-25 mx-auto m-5 bg-dark text-white">
    <img style="width: 100px;" src="{{asset('storage/'.$player->photo->src)}} " alt="">
    <div class="text-start ms-3 ">
        
            <p><span class="fs-3">Nom : </span> {{$player->nom}} </p>
            <p><span class="fs-3">Prénom : </span> {{$player->prenom}} </p>
            <p><span class="fs-3">Age : </span> {{$player->age}} </p>
            <p><span class="fs-3">Teléphone : </span> {{$player->tel}} </p>
            <p><span class="fs-3">email : </span> {{$player->email}} </p>
            <p><span class="fs-3">genre : </span> {{$player->genre}} </p>
            <p><span class="fs-3">pays : </span> {{$player->pays}} </p>
            <p><span class="fs-3">Rôle : </span> {{$player->role}} </p>
            <div class="d-flex">
                <a href="/player/{{$player->id}}/edit " class="btn btn-success mx-2">Edit</a>
                <form action="/player/{{$player->id}}" method="POST" >
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" >Delete</button>
                </form>

            </div>
    
    </div>
</section>