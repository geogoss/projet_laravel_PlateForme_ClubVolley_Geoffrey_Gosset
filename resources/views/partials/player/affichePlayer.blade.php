<section>
    @foreach ($players as $player)
        <div class="card" style="width: 18rem;">
            <img src="{{$player->photo_id}} " class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{ $player->nom }} </h5>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    @endforeach
</section>
