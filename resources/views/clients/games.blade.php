@extends('layouts.games')
@section('title', $viewData['title'])
@section('content')
    <section class="games-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    @include('clients.parts.sidebargenre')
                </div>
                <div class="col-md-9">
                    {{-- Filter here --}}
                    @include('clients/parts/filter')
                    <div class="all-games">
                        <div class="row g-2">
                            @foreach ($viewData['games'] as $gameSaler)
                                <div class="col-9 col-md-2-4">
                                    <div>
                                        <a href="{{ route('clients.gamesDetail', ['id' => $gameSaler->getGameId()]) }}">
                                            <div class="card bg-dark games-item">
                                                <div class="game_picture">
                                                    <div class="game_picture_wrapper">
                                                        <img class="img-fluid"
                                                            src="{{ '/storage/' . $gameSaler->getIamge() }}" alt="">

                                                    </div>

                                                </div>
                                                <div class="card-body">
                                                    <div class="card-text text-secondary game_base">BASE GAME
                                                    </div>
                                                    <div class="card-text text-light game_title truncated">
                                                        {{ $gameSaler->getNameGame() }}</div>
                                                    <div
                                                        class="card-footer d-flex align-items-center justify-content-between">
                                                        <div class="rounded-2 bg-primary text-white game_saleoff">
                                                            -10%</div>
                                                        <div class="games_price">
                                                            <div
                                                                class="text-decoration-line-through text-secondary game_old_price">
                                                                đ10000
                                                            </div>
                                                            <div class="text-light game_new_price">
                                                                {{ $gameSaler->getPrice() }}</div>
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
                </div>
            </div>
        </div>
    </section>
@endsection
