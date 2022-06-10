@extends('app')
@section('content')
    <div class="container-fluid">

        {{-- introduction sentence --}}
        <div class="d-flex flex-column align-items-center py-4">
            <h3>Bienvenue au Jeu de Combat</h3>
            <p>Cliquez sur ce boutton pour débuter</p>
        </div>
        {{-- button to start game and navigate to next page --}}
        <div class="d-grid gap-2 col-6 mx-auto">
            <a href="/play-game" class="btn btn-primary" tabindex="-1" role="button" aria-disabled="true">Commencer</a>
        </div>
    </div>
@endsection
