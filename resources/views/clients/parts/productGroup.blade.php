<section class="bg-black pb-5">
    <div class="container-md">
        <a class="games_title">
            <h2 class="text-white py-3">Game on sales</h2>
        </a>
    </div>
    <div class="container-md mb-3">
        <div class="row g-0 g-md-5">
            @for ($i = 0; $i < 3; $i++)
                <div class="col-12 col-md-4">
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
                            <div class="card-body mt-3">
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

<section class="bg-black pb-5">
    <div class="container-md">
        <a class="games_title">
            <h2 class="text-white py-3">Trending</h2>
        </a>
    </div>
    <div class="container-md mb-3">
        <div class="row g-0 g-md-5">
            @for ($i = 0; $i < 3; $i++)
                <div class="col-12 col-md-4">
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
                            <div class="card-body mt-3">
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
<section class="bg-black pb-5">
    <div class="container-md mb-3">
        <div class="row align-items-center flex-nowrap overflow-x-scroll">
            <div class="col-9 col-md-4 list-group">
                <div class="lists_wrapper p-4">
                    <div>
                        <div
                            class="list_header d-flex justify-content-between align-items-center">

                            <a class="games_title">
                                <h2 class="text-white py-3">Trending</h2>
                            </a>

                            <div
                                class="btn btn-outline-secondary text-uppercase">
                                View More
                            </div>
                        </div>
                        <div class="game_product_thumb">
                            <div class="game_product_avatar">
                                <div>
                                    <div
                                        class="d-flex align-items-center overflow-hidden">
                                        <img class="img-fluid"
                                            src="/storage/5.jpg" alt="thumnail">
                                    </div>
                                </div>
                            </div>
                            <span class="game_title truncated">
                                Division
                            </span>
                        </div>
                        <div class="game_product_thumb">
                            <div class="game_product_avatar">
                                <div>
                                    <div
                                        class="d-flex align-items-center overflow-hidden">
                                        <img class="img-fluid"
                                            src="/storage/5.jpg" alt="thumnail">
                                    </div>
                                </div>
                            </div>
                            <span class="game_title truncated">
                                Division
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-9 col-md-4 list-group">
                <div class="lists_wrapper p-4">
                    <div>
                        <div
                            class="list_header d-flex justify-content-between align-items-center">

                            <a class="games_title">
                                <h2 class="text-white py-3">Trending</h2>
                            </a>

                            <div
                                class="btn btn-outline-secondary text-uppercase">
                                View More</div>
                        </div>
                        <div class="game_product_thumb">
                            <div class="game_product_avatar">
                                <div>
                                    <div
                                        class="d-flex align-items-center overflow-hidden">
                                        <img class="img-fluid"
                                            src="/storage/5.jpg" alt="thumnail">
                                    </div>
                                </div>
                            </div>
                            <span class="game_title truncated">
                                Division
                            </span>
                        </div>
                        <div class="game_product_thumb">
                            <div class="game_product_avatar">
                                <div>
                                    <div
                                        class="d-flex align-items-center overflow-hidden">
                                        <img class="img-fluid"
                                            src="/storage/5.jpg" alt="thumnail">
                                    </div>
                                </div>
                            </div>
                            <span class="game_title truncated">
                                Division
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-9 col-md-4 list-group">
                <div class="lists_wrapper p-4">
                    <div>
                        <div
                            class="list_header d-flex justify-content-between align-items-center">

                            <a class="games_title">
                                <h2 class="text-white py-3">Trending</h2>
                            </a>

                            <div
                                class="btn btn-outline-secondary text-uppercase">
                                View More</div>
                        </div>
                        <div class="game_product_thumb">
                            <div class="game_product_avatar">
                                <div>
                                    <div
                                        class="d-flex align-items-center overflow-hidden">
                                        <img class="img-fluid"
                                            src="/storage/5.jpg" alt="thumnail">
                                    </div>
                                </div>
                            </div>
                            <span class="game_title truncated">
                                Division
                            </span>
                        </div>
                        <div class="game_product_thumb">
                            <div class="game_product_avatar">
                                <div>
                                    <div
                                        class="d-flex align-items-center overflow-hidden">
                                        <img class="img-fluid"
                                            src="/storage/5.jpg"
                                            alt="thumnail">
                                    </div>
                                </div>
                            </div>
                            <span class="game_title truncated">
                                Division
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
