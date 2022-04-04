@extends('layouts.app')

@section('content')
    <main>
        <h1 class="text-center my-5 text-dark">Les clubs de Volley</h1>
        <div class="w-100 d-flex justify-content-center">
        </div>
        <div class="container">
            <div class="row">
                @foreach ($clubTot as $club)
                    <div class="col-4">
                        <div class="card my-5" style="width: 18rem;">
                            <img src="https://static01.nicematin.com/media/npo/1440w/2018/08/40677393.jpg"
                                class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{ $club->nom }}</h5>
                                <h6 class="card-subtitle">{{ $club->ville }} in {{ $club->pays }}</h6>
                                <hr>
                                <div class="row text-center">
                                    <div class="col-xs-4">
                                        <div class="mb-3">
                                            <h4>{{ $club->nombre }}/8</h4>
                                            <p>Joueurs</p>
                                        </div>
                                        <div class="d-flex justify-content-around">
                                            <div>
                                                <h5>{{ $club->AR }}</h5>
                                                <p>AR</p>
                                            </div>
                                            <div>
                                                <h5>{{ $club->AV }}</h5>
                                                <p>AV</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-4">
                                        <div class="d-flex justify-content-around">
                                            <div>
                                                <h5>{{ $club->CE }}</h5>
                                                <p>CE</p>
                                            </div>
                                            <div>
                                                <h5>{{ $club->RP }}</h5>
                                                <p>RP</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-4">
                                        <div class="d-flex w-100 justify-content-center">
                                            <a class="btn shadow-none fs-5  show border-primary"
                                                href={{ route('club.show', $club->id) }}><i
                                                    class="fas ">Show</i></a>
                                            <a class="btn edit mx-1 shadow-none fs-5 border-success"
                                                href={{ route('club.edit', $club->id) }}><i
                                                    class="fas fa-user-edit">Edit</i></a>
                                            <form action={{ route('club.destroy', $club->id) }} method="post">
                                                @csrf
                                                @method("delete")
                                                <button class="btn shadow-none  mx-1 fs-5 delete border-danger"
                                                    type="submit"><i class="fas fa-trash-alt"></i>Delete</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
@endsection
