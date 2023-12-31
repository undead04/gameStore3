<section class="bg-black pb-5">
    <div class="container-md mb-3">

        <div
            class="list_header d-flex justify-content-between align-items-center">

            <a class="">
                <h2 class="text-white py-3">{{ $types->getTypeGame() }}
                </h2>
            </a>

            <a class="btn btn-outline-secondary text-uppercase text-light px-5 py-3"
                href="{{ route('clients.viewMore', ['type' => $types->getTypeGame()]) }}">
                view More
            </a>
        </div>
        <div class="row g-0 g-md-5">
            @foreach ($types->typeGame->take(5) as $typeGames)
                <div class="col-9 col-md-2-4">
                    <div>
                        <a
                            href="{{ route('clients.gamesDetail', ['id' => $typeGames->games->getGameId()]) }}">
                            <div class="card bg-dark games-item">
                                <div class="game_picture">
                                    <div class="game_picture_wrapper">
                                        <img class="img-fluid"
                                            src="{{ '/storage/' . $typeGames->games->getImage() }}"
                                            alt="">

                                    </div>

                                </div>
                                <div class="card-body">
                                    <div
                                        class="card-text text-secondary game_base">
                                        BASE GAME
                                    </div>
                                    <div
                                        class="card-text text-light game_title ps-0 truncated">
                                        {{ $typeGames->games->getNameGame() }}
                                    </div>
                                    <div
                                        class="card-footer ps-0 d-flex align-items-center justify-content-between">
                                        <div>
                                            <div
                                                class="bg-primary {{ $typeGames->games->getDiscount() == 0 ? 'd-none' : 'd-block' }} badge py-2 px-3 fs-5">
                                                -{{ $typeGames->games->getDiscount() }}
                                                %
                                            </div>
                                        </div>
                                        <div class="games_price">
                                            @if ($typeGames->games->getDiscount() == 0)
                                                <div style="height: 20px"></div>
                                            @else
                                                <div
                                                    class="text-decoration-line-through text-secondary game_old_price">
                                                    ₫{{ number_format($typeGames->games->getPrice(), 0, '.', ',') }}
                                                </div>
                                            @endif
                                            <div
                                                class="text-light game_new_price">
                                                ₫{{ number_format($typeGames->games->getPrice() - ($typeGames->games->getPrice() * $typeGames->games->getDiscount()) / 100, 0, '.', ',') }}
                                            </div>
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
