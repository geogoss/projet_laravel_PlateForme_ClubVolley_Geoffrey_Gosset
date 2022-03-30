@extends('layouts.app')

@section('content')
    <main class="mt-5 pt-5">
        <div class="profile-card-6"><img src="https://static01.nicematin.com/media/npo/1440w/2018/08/40677393.jpg"
                class="rounded mx-auto d-block">
            <div class="profile-name text-center my-5 fs-2">{{ $club->nom }}
                <br>{{ $club->ville }} in {{ $club->pays }}
            </div>
            <div class="profile-position"> </div>
            <div class="profile-overview">
                <div class="profile-overview">
                    <div class="row text-center">
                        <div class="col-xs-4">
                            <div>
                                <h3>{{ $club->nombre }}/7</h3>
                                <p>Joueurs</p>
                            </div>
                            <div class="d-flex justify-content-evenly">
                                <div>
                                    <h3>{{ $club->AR }}</h3>
                                    <p>Arrière-centre</p>
                                </div>
                                <div>
                                    <h3>{{ $club->AV }}</h3>
                                    <p>Avant-centre</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-4">
                            <div class="d-flex justify-content-evenly">
                                <div>
                                    <h3>{{ $club->CE }}</h3>
                                    <p>Centraux</p>
                                </div>
                                <div>
                                    <h3>{{ $club->RP }}</h3>
                                    <p>Remplacant(s)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
