<h1 class="text-center m-5">Les joueurs : </h1>
<section class="d-flex flex-wrap my-3">
    {{-- @foreach ($playerTeam as $playerTeam) --}}
        <div class="card mx-auto m-2 " style="width: 18rem;">
            <img src="{{asset('/storage/'.$playerTeam->photo->src)}} " class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{ $playerTeam->nom }} </h5>
                <h5 class="card-title">{{ $playerTeam->pays }} </h5>
                <h5 class="card-title">{{ $playerTeam->genre }} </h5>
                <h5 class="card-title">{{ $playerTeam->club_id }} </h5>
                <div class="d-flex">
                    <a href="/player/{{$playerTeam->id}} " class="btn btn-primary mx-2">Show</a>
                    <a href="/player/{{$playerTeam->id}}/edit " class="btn btn-success mx-2">Edit</a>
                    <form action="/player/{{$playerTeam->id}}" method="POST" >
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
    
                </div>
            </div>
        </div>
        <div class="card mx-auto m-2 " style="width: 18rem;">
            <img src="{{asset('/storage/'.$playerTeam1->photo->src)}} " class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{ $playerTeam1->nom }} </h5>
                <h5 class="card-title">{{ $playerTeam1->pays }} </h5>
                <h5 class="card-title">{{ $playerTeam1->genre }} </h5>
                <h5 class="card-title">{{ $playerTeam1->club_id }} </h5>
                <div class="d-flex">
                    <a href="/player/{{$playerTeam1->id}} " class="btn btn-primary mx-2">Show</a>
                    <a href="/player/{{$playerTeam1->id}}/edit " class="btn btn-success mx-2">Edit</a>
                    <form action="/player/{{$playerTeam1->id}}" method="POST" >
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
    
                </div>
            </div>
        </div>
        <div class="card mx-auto m-2 " style="width: 18rem;">
            <img src="{{asset('/storage/'.$playerTeam2->photo->src)}} " class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{ $playerTeam2->nom }} </h5>
                <h5 class="card-title">{{ $playerTeam2->pays }} </h5>
                <h5 class="card-title">{{ $playerTeam2->genre }} </h5>
                <h5 class="card-title">{{ $playerTeam2->club_id }} </h5>
                <div class="d-flex">
                    <a href="/player/{{$playerTeam2->id}} " class="btn btn-primary mx-2">Show</a>
                    <a href="/player/{{$playerTeam2->id}}/edit " class="btn btn-success mx-2">Edit</a>
                    <form action="/player/{{$playerTeam2->id}}" method="POST" >
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
    
                </div>
            </div>
        </div>
    {{-- @endforeach --}}
</section>