@extends('layouts.games')
@section('title', $viewData['title'])
@section('content')
    <section class="bg-dark py-5">
        <div class="container-md">
            <div class="row g-0 g-md-5">
                <h1 class="display-3 fw-normal text-light">
                    {{ $viewData['type']->getTypeGame() }}</h1>
                @foreach ($viewData['type']->typeGame as $types)
                    <div class="col-9 col-md-3">
                        <div>
                            <a
                                href="{{ route('clients.gamesDetail', ['id' => $types->games->getGameId()]) }}">
                                <div class="card bg-dark game_item">
                                    <div class="game_picture">
                                        <div class="game_picture_wrapper">
                                            <img class="img-fluid"
                                                src="{{ '/storage/' . $types->games->getImage() }}"
                                                alt="">

                                        </div>

                                    </div>
                                    <div class="card-body">
                                        <div
                                            class="card-text text-secondary game_base">
                                            BASE GAME
                                        </div>
                                        <div
                                            class="card-text text-light fs-secondary truncated">
                                            {{ $types->games->getNameGame() }}</div>
                                        <div
                                            class="card-footer ps-0 d-flex align-items-center justify-content-between">
                                            @if ($types->games->getPrice() == 0)
                                                <div></div>
                                                <div
                                                    class="text-light badge bg-secondary game_new_price">
                                                    Free
                                                </div>
                                            @else
                                                <div
                                                    class="rounded-2 text-white badge bg-primary badge-lg game_new_price">
                                                    -25%
                                                </div>
                                                <div class="games_price">
                                                    <div
                                                        class="text-decoration-line-through text-secondary game_old_price">
                                                        <span>₫{{ number_format($types->games->getPrice() * 1.25, 0, '.', ',') }}</span>
                                                    </div>
                                                    <div
                                                        class="text-light game_new_price">
                                                        <span>₫{{ number_format($types->games->getPrice(), 0, '.', ',') }}</span>
                                                    </div>
                                                </div>
                                            @endif
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
