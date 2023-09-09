@extends('layouts.games')
@section('title', $viewData['title'])
@section('content')
    <div class="container">
        <div class="row g-5">
            <h1>{{ $viewData['type']->getTypeGame() }}</h1>
            @foreach ($viewData['type']->typeGame as $types)
                <div class="col-9 col-md-3">
                    <div>
                        <a href="{{ route('clients.gamesDetail', ['id' => $types->games->getGameId()]) }}">
                            <div class="card bg-dark games-item">
                                <div class="game_picture">
                                    <div class="game_picture_wrapper">
                                        <img class="img-fluid" src="{{ '/storage/' . $types->games->getIamge() }}"
                                            alt="">

                                    </div>

                                </div>
                                <div class="card-body">
                                    <div class="card-text text-secondary game_base">BASE GAME
                                    </div>
                                    <div class="card-text text-light game_title truncated">
                                        {{ $types->games->getNameGame() }}</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <div class="rounded-2 bg-primary text-white game_saleoff">
                                            -10%</div>
                                        <div class="games_price">
                                            <div class="text-decoration-line-through text-secondary game_old_price">
                                                đ10000
                                            </div>
                                            <div class="text-light game_new_price">
                                                {{ $types->games->getPrice() }}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
