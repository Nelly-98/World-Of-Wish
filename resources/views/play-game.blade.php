@extends('app')
@section('content')
    {{-- go back flex grid --}}
    <div class="d-grid gap-2 d-md-flex justify-content-md-end py-2">
        <a href="{{ url()->previous() }}" class="btn btn-light me-md-2">Retour</a>
    </div>

    {{-- card --}}
    <div class="container">
        <div class="card w-auto my-4">
            <div class="card-header">
                TG
            </div>
            <div class="card-body">
                <h5 class="card-title">Choisissez le rôle de votre joueur</h5>
                <form action="/play-game" method="post" class="my-3">
                    @csrf
                    <div>
                        <label for="coallition" class="button">Coallition</label>
                        <input class="form-check-input" name="player_faction" value="coallition" id="coallition"
                            data-bs-toggle="collapse" type="radio" data-bs-target="#collapse" aria-controls="collapse">
                        <label for="colonie" class="button">Colonie</label>
                        <input class="form-check-input" name="player_faction" value="colonie" id="colonie" type="radio"
                            data-bs-toggle="collapse" data-bs-target="#collapse" aria-controls="collapse">
                    </div>
                    <div class="collapse" id="collapse">
                        <input type="text" name="player_type" value="user" class="hidden_input">
                        <div class="row g-2">
                            <div class="col-auto">
                                <input type="text" class="form-control mx-2" placeholder="Player name here please ..."
                                    name="player_name" id="player_name">
                            </div>
                        </div>
                        <div class="row p-3">
                            <div class="col warrior">
                                <input type="radio" class="form-check-input" name="player_class" id="warrior"
                                    value="warrior" data-bs-toggle="collapse" data-bs-target="#collapse-warrior-weapon"
                                    aria-controls="collapse-warrior-weapon">
                                <label for="warrior">
                                    <img src="{{ asset('images/warrior_icon.png') }}" alt="warrior">
                                    Guerrier
                                </label>
                            </div>
                            <div class="col wizard">
                                <input type="radio" class="form-check-input" name="player_class" id="wizard" value="wizard">
                                <label for="wizard">
                                    <img src="{{ asset('images/wizard_icon.png') }}" alt="wizard">Sorcier
                                </label>
                            </div>
                            <div class="col archer">
                                <input type="radio" class="form-check-input" name="player_class" id="archer" value="archer">
                                <label for="archer">
                                    <img src="{{ asset('images/archer_icon.png') }}" alt="archer">Archer
                                </label>
                            </div>
                            <div class="col priest">
                                <input type="radio" class="form-check-input" name="player_class" id="priest" value="priest">
                                <label for="priest">
                                    <img src="{{ asset('images/priest_icon.png') }}" alt="priest">Prêtre
                                </label>
                            </div>
                            <div class="col druid">
                                <input type="radio" class="form-check-input" name="player_class" id="druid" value="druid">
                                <label for="druid">
                                    <img src="{{ asset('images/druid_icon.png') }}" alt="druid">Druide
                                </label>
                            </div>
                        </div>
                        <div class="collapse" id="collapse-warrior-weapon">
                            <div class="row p-3">
                                <div class="col sword m-3">
                                    <input type="radio" class="form-check-input" name="weapon" id="sword" value="sword">
                                    <label for="sword">
                                        <img src="{{ asset('images/sword_warrior.png') }}" alt="sword">Epee
                                    </label>
                                </div>
                                <div class="col shield m-3">
                                    <input type="radio" class="form-check-input" name="weapon" id="shield" value="shield">
                                    <label for="shield">
                                        <img src="{{ asset('images/shield_warrior.png') }}" alt="shield">Bouclier
                                    </label>
                                </div>
                                <div class="col hache m-3">
                                    <input type="radio" class="form-check-input" name="weapon" id="hache" value="hache">
                                    <label for="hache">
                                        <img src="{{ asset('images/hache_warrior.png') }}" alt="hache">Hache
                                    </label>
                                </div>
                                <div class="col javelot m-3">
                                    <input type="radio" class="form-check-input" name="weapon" id="javelot" value="javelot">
                                    <label for="javelot">
                                        <img src="{{ asset('images/javelot_warrior.png') }}" alt="javelot">Javelot
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto my-2">
                            <button type="submit" class="btn btn-secondary m-2">Jouer</button>
                        </div>
                </form>
            </div>
        </div>
    </div>
    </div>
@endsection
