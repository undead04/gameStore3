@extends('layouts.games')
@section('title', 'Exploring game')
@section('content')
    <section class="games-page py-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    @include('clients.parts.sidebargenre')
                </div>
                <div class="col-md-9">
                    <div class="all-games">
                        <div class="row g-2">
                            @for ($i = 0; $i < 25; $i++)
                                <div class="col-md-2-4">
                                    <div>
                                        <a href="#">
                                            <div class="card bg-dark games-item">
                                                <div class="game_picture">
                                                    <div class="game_picture_wrapper">
                                                        <img class="img-fluid"
                                                            src="https://cdn1.epicgames.com/spt-assets/5d045544c8834efbab794fe891c6697a/trex-dinosaur-game-ngf4p.png?h=480&quality=medium&resize=1&w=360"
                                                            alt="">
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <div class="card-text text-secondary game_base">BASE GAME</div>
                                                    <div class="card-text text-light game_title">T-Rex Dinosaur Game</div>
                                                    <div
                                                        class="card-footer d-flex align-items-center justify-content-between">
                                                        <div class="rounded-2 bg-primary text-white game_saleoff">-10%</div>
                                                        <div class="games_price">
                                                            <div
                                                                class="text-decoration-line-through text-secondary game_old_price">
                                                                đ10000
                                                            </div>
                                                            <div class="text-light game_new_price">đ7000</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            @endfor
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
