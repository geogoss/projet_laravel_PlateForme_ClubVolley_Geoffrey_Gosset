<section class="d-flex flex-wrap m-3">
    @foreach ($players as $player)
        <div class="card m-2" style="width: 18rem;">
            <img src="{{asset('/storage/'.$player->photo->src)}} " class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{ $player->nom }} </h5>
                <div class="d-flex">
                    <a href="/player/{{$player->id}} " class="btn btn-primary mx-2">Show</a>
                    <a href="/player/{{$player->id}}/edit " class="btn btn-success mx-2">Edit</a>
                    <form action="/player/{{$player->id}}" method="POST" >
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" >Delete</button>
                    </form>
    
                </div>
            </div>
        </div>
    @endforeach
</section>
