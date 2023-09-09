<section class="bg-black pb-5">
    <div class="container-md">
        <a class="games_title">
            <h2 class="text-white py-3">Game Action</h2>
        </a>
    </div>
    <div class="container-md mb-3">
        <div class="row g-0 g-md-5">
            @foreach ($viewData['gameAction'] as $gameAction)
                <div class="col-12 col-md-4">
                    <div class="pb-3">
                        <a href="{{ route('clients.gamesDetail', ['id' => $gameAction['gameId']]) }}"
                            class="card bg-transparent text-light">
                            <div class="game_picture product_group">
                                <div class="game_picture_wrapper txf">
                                    <img src="{{ '/storage/' . $gameAction->getIamge() }}"
                                        class="card-img-top rounded-4" alt="{{ $gameAction->getNameGame() }}">
                                </div>
                            </div>
                            <div class="card-body mt-3">
                                <h5 class="card-title display-6 truncated">
                                    {{ $gameAction->getNameGame() }}
                                </h5>
                                <p class="card-text truncated-3 productGroup_description lead">
                                    {{ $gameAction->getDescription() }}
                                </p>
                                <a href="#" class="productGroup_price_label"><span
                                        class="text-decoration-underline">đ</span>{{ $gameAction->getPrice() }}
                                </a>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>


<section class="bg-black pb-5">
    <div class="container-md mb-3">
        <div class="row align-items-center flex-nowrap overflow-x-scroll">
            @foreach ($viewData['gameAd-si-ro'] as $types)
                <div class="col-9 col-md-4 list-group">
                    <div class="lists_wrapper p-4">
                        <div>
                            <div class="list_header d-flex justify-content-between align-items-center">

                                <a class="games_title">
                                    <h2 class="text-white py-3">{{ $types->getTypeGame() }}
                                    </h2>
                                </a>

                                <a class="btn btn-outline-secondary text-uppercase text-light px-5 py-3"
                                    href="{{ route('clients.viewMore', ['type' => $types->getTypeGame()]) }}">
                                    view More
                                </a>
                            </div>
                            {{-- 6 games per collumn --}}
                            @foreach ($types->typeGame->take(6) as $typeGames)
                                <div class="game_product_thumb">
                                    <div class="game_product_avatar">
                                        <div>
                                            <div class="d-flex align-items-center overflow-hidden">
                                                <img class="img-fluid"
                                                    src="{{ '/storage/' . $typeGames->games->getIamge() }}"
                                                    alt="thumnail">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="game_product_body">
                                        <div class="game_title truncated">
                                            {{ $typeGames->games->getNameGame() }}
                                        </div>
                                        <div class="game_product_description">
                                            <span class="badge bg-primary">-30%</span>
                                            <span class="game_product_price text-secondary">
                                                <span class="text-decoration-underline">đ</span>
                                                <span>990,000</span>
                                            </span>
                                            <span class="game_product_price text-light">
                                                <span class="text-decoration-underline text-light">đ</span>
                                                <span>{{ $typeGames->games->getPrice() }}</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
