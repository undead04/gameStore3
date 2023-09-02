<section class="bg-black">
    <div class="container-md mb-3">
        <a class="games_title">
            <h2 class="text-white py-3">Trending</h2>
        </a>
        <div class="row g-5">
            @for ($i = 0; $i < 3; $i++)
                <div class="col-md-4">
                    <div class="pb-3">
                        <a href="{{ route('clients.gamesDetail', ['id' => $viewData['games'][$i]->getGameId()]) }}"
                            class="card bg-transparent text-light">
                            <div class="game_picture product_group">
                                <div class="game_picture_wrapper txf">
                                    <img src="{{ '/storage/' . $viewData['games'][$i]->getIamge() }}"
                                        class="card-img-top rounded-4"
                                        alt="{{ $viewData['games'][$i]->getNameGame() }}">
                                </div>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title display-6 truncated">
                                    {{ $viewData['games'][$i]->getNameGame() }}
                                </h5>
                                <p
                                    class="card-text truncated-3 productGroup_description lead">
                                    {{ $viewData['games'][$i]->getDescription() }}
                                </p>
                                <a href="#"
                                    class="productGroup_price_label"><span
                                        class="text-decoration-underline">đ</span>{{ $viewData['games'][$i]->getPrice() }}
                                </a>
                            </div>
                        </a>
                    </div>
                </div>
            @endfor
        </div>
        <hr>
    </div>
    <div class="container-md mb-3">
        <a class="games_title">
            <h2 class="text-white py-3">Recently update</h2>
        </a>
        <div class="row g-5">
            @for ($i = 4; $i < 7; $i++)
                <div class="col-md-4">
                    <div class="pb-3">
                        <a href="{{ route('clients.gamesDetail', ['id' => $viewData['games'][$i]->getGameId()]) }}"
                            class="card bg-transparent text-light">
                            <div class="game_picture product_group">
                                <div class="game_picture_wrapper txf">
                                    <img src="{{ '/storage/' . $viewData['games'][$i]->getIamge() }}"
                                        class="card-img-top rounded-4"
                                        alt="{{ $viewData['games'][$i]->getNameGame() }}">
                                </div>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title display-6 truncated">
                                    {{ $viewData['games'][$i]->getNameGame() }}
                                </h5>
                                <p
                                    class="card-text truncated-3 productGroup_description lead">
                                    {{ $viewData['games'][$i]->getDescription() }}
                                </p>
                                <a href="#"
                                    class="productGroup_price_label"><span
                                        class="text-decoration-underline">đ</span>{{ $viewData['games'][$i]->getPrice() }}
                                </a>
                            </div>
                        </a>
                    </div>
                </div>
            @endfor
        </div>
    </div>
</section>
