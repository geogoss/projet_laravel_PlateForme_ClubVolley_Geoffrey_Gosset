@extends('layouts.app')

@section('content')
<main>
    <h1 class="text-center my-5 text-dark">clubs</h1>
    <div class="w-100 d-flex justify-content-center">
        <a class="btn shadow-none create fs-1   px-4 create" href="/club"><i
                class="fas fa-plus"></i></a>
    </div>
    <div class="container">
        <div class="row">
            @foreach ($clubs as $club)
            <div class="col-4">
                <div class="profile-card-6"><img
                        src=""
                        class="img img-responsive">
                    <div class="profile-name">{{$club->nom}}
                        <br>{{$club->ville}} in {{$club->pays}}</div>
                    <div class="profile-position">{{$club->continent}}</div>
                    <div class="profile-overview">
                        <div class="profile-overview">
                            <div class="row text-center">
                                <div class="col-xs-4">
                                    <div>
                                        <h3>{{$club->nombre}}/7</h3>
                                        <p>Joueurs</p>
                                    </div>
                                    <div class="d-flex justify-content-around">
                                        <div>
                                            <h3>{{$club->AR}}</h3>
                                            <p>AR</p>
                                        </div>
                                        <div>
                                            <h3>{{$club->AV}}</h3>
                                            <p>AV</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-4">
                                    <div class="d-flex justify-content-around">
                                        <div>
                                            <h3>{{$club->CE}}</h3>
                                            <p>CE</p>
                                        </div>
                                        <div>
                                            <h3>{{$club->RP}}</h3>
                                            <p>RP</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-4">
                                    <div class="d-flex w-100 justify-content-center">
                                        <a class="btn shadow-none fs-2  show"
                                            href={{ route("club.show", $club->id) }}><i class="fas fa-eye"></i></a>
                                        <a class="btn edit mx-1 shadow-none fs-2"
                                            href={{ route("club.edit", $club->id) }}><i
                                                class="fas fa-user-edit"></i></a>
                                        <form action={{ route("club.destroy", $club->id) }} method="post">
                                            @csrf
                                            @method("delete")
                                            <button class="btn shadow-none  mx-1 fs-2  delete" type="submit"><i
                                                    class="fas fa-trash-alt"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            <div>{{ $clubs->links() }}</div>
        </div>
    </div>
    </div>
    </div>
</main>
@endsection