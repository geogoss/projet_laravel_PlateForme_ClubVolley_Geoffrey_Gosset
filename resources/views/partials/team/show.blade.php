@extends('layouts.app')

@section('content')
    <main class="mt-5 pt-5">
        <div class="profile-card-6"><img src=""
                class="img img-responsive">
            <div class="profile-name">{{ $club->nom }}
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
                            <div class="d-flex justify-content-around">
                                <div>
                                    <h3>{{ $club->AR }}</h3>
                                    <p>AR</p>
                                </div>
                                <div>
                                    <h3>{{ $club->AV }}</h3>
                                    <p>AV</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-4">
                            <div class="d-flex justify-content-around">
                                <div>
                                    <h3>{{ $club->CE }}</h3>
                                    <p>CE</p>
                                </div>
                                <div>
                                    <h3>{{ $club->RP }}</h3>
                                    <p>RP</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
