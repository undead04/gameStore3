@extends('layouts.client')
@section('title')
@section('content')
    @include('clients.parts.banner')
    <section class="py-5 bg-black">
        <div class="container-md">
            <a class="games_title">
                <h2 class="text-white my-3">Game on sale</h2>
            </a>
            <div class="row flex-nowrap overflow-x-scroll">

                @foreach ($viewData['game'] as $game)
                    <div class="col-md-2-4">
                        <div>
                            <a href="#">
                                <div class="card bg-transparent">
                                    <div class="game_picture">
                                        <div class="game_picture_wrapper">
                                            <img class="img-fluid" src="{{ '/storage/' . $game->getIamge() }}" alt="">
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-text text-secondary game_base">BASE GAME</div>
                                        <div class="card-text text-light game_title">{{ $game->getNameGame() }}</div>
                                        <div class="card-footer d-flex align-items-center justify-content-between">
                                            <div class="rounded-2 bg-primary text-white game_saleoff">-10%</div>
                                            <div class="games_price">
                                                <div class="text-decoration-line-through text-secondary game_old_price">
                                                    {{ $game->getPrice() }}
                                                </div>
                                                <div class="text-light game_new_price">đ7000</div>
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
    </section>
@endsection
