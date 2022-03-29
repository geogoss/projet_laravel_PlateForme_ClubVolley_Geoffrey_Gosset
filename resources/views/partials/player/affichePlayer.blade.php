<section class="d-flex flex-wrap m-3">
    @foreach ($players as $player)
        <div class="card m-2" style="width: 18rem;">
            <img src="{{asset('/storage/images/'.$player->photo->src)}} " class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{ $player->nom }} </h5>
                <a href="/player/{{$player->id}} " class="btn btn-primary">Show</a>
            </div>
            <form action="/player/{{$player->id}}" method="POST" >
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" >Delete</button>
            </form>
        </div>
    @endforeach
</section>
