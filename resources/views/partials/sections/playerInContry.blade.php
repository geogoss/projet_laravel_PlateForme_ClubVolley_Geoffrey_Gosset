

@foreach ($clubs as $club)
            @foreach ($players as $player)
                @if ($player->pays == $club->pays)
                <div class="card bg-dark text-white border border-warning my-1 mx-1" 
                style="width: 350px; height: 150px; text-shadow: -1px -1px black, 1px 1px #333;
                overflow: hidden; line-height: 10px">
                    <img src="{{asset('storage/'.$player->photo->src)}}"  class="card-img" alt="player" 
                    style="filter: brightness(40%);">
            
                    <div class="card-img-overlay">
                        @if ($player->club_id != null)
                        <h1 class="card-title">{{$player->club->nom}}</h1>
                        <h1 class="card-title">{{$player->club->pays}}</h1>
                        @endif
                        <p class="card-text fs-3"><span class="text-warning">R</span>ole - 
                            <span class="text-primary fs-1">{{$player->role->nom}}</span></p>
                        <p class="card-text text-light fw-bold fs-4"><span class="fw-light">{{$player->nom}} {{$player->prenom}} {{$player->pays}} </span></h5></p>
                    </div>
                </div>
                @endif
            @endforeach
        @endforeach


