@extends('layouts.app')
@section('content')
    <header class="my-5 text-center">
        <h1>Bonjour</h1>
        <h3>Compétition VollayBall</h3>
    </header>
    <hr>
    <main class="row">

        @include('partials.sections.playerWithoutTeam')
        @include('partials.sections.playerWithTeam')
        @include('partials.sections.teamNotFull')
        @include('partials.sections.teamRandom')
        @include('partials.sections.europeTeam')
        @include('partials.sections.notEuropeTeam')
        @include('partials.sections.joueur')
        @include('partials.sections.joueuse')
        @include('partials.sections.playerInContry')
    </main>
@endsection
