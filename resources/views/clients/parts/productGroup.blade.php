<section class="bg-black pb-5">
    <div class="container-md">
        <a class="games_title">
            <h2 class="text-white py-3">Game on sales</h2>
        </a>
    </div>
    <div class="container-md mb-3">
        <div class="row g-0 g-md-5">
            @foreach ($viewData['games'] as $games)
                <div class="col-12 col-md-4">
                    <div class="pb-3">
                        <a href="{{ route('clients.gamesDetail', ['id' => $games->getGameId()]) }}"
                            class="card bg-transparent text-light">
                            <div class="game_picture product_group">
                                <div class="game_picture_wrapper txf">
                                    <img src="{{ '/storage/' . $games->getIamge() }}" class="card-img-top rounded-4"
                                        alt="{{ $games->getNameGame() }}">
                                </div>
                            </div>
                            <div class="card-body mt-3">
                                <h5 class="card-title display-6 truncated">
                                    {{ $games->getNameGame() }}
                                </h5>
                                <p class="card-text truncated-3 productGroup_description lead">
                                    {{ $games->getDescription() }}
                                </p>
                                <a href="#" class="productGroup_price_label"><span
                                        class="text-decoration-underline">đ</span>{{ $games->getPrice() }}
                                </a>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

@foreach ($viewData['gameAllowType'] as $type)
    <section class="bg-black pb-5">
        <div class="container-md">
            <a class="games_title">
                <h2 class="text-white py-3">{{ $type->getTypeGame() }}</h2>
            </a>
        </div>
        <div class="container-md mb-3">
            <div class="row g-0 g-md-5">
                <div class="col-12 col-md-4">
                    <div class="pb-3">

                        @foreach ($type->typeGame as $game)
                            <a href="{{ route('clients.gamesDetail', ['id' => $game->games->getGameId()]) }}"
                                class="card bg-transparent text-light">
                                <div class="game_picture product_group">
                                    <div class="game_picture_wrapper txf">,

                                        <img src="{{ '/storage/' . $game->games->getIamge() }}"
                                            class="card-img-top rounded-4" alt="{{ $game->games->getNameGame() }}">
                                    </div>
                                </div>
                                <div class="card-body mt-3">
                                    <h5 class="card-title display-6 truncated">
                                        {{ $game->games->getNameGame() }}
                                    </h5>
                                    <p class="card-text truncated-3 productGroup_description lead">
                                        {{ $game->games->developer->getDeveloperName() }}
                                    </p>
                                    <a href="#" class="productGroup_price_label"><span
                                            class="text-decoration-underline">đ</span>{{ $game->games->getPrice() }}
                                    </a>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endforeach
<section class="bg-black pb-5">
    <div class="container-md mb-3">
        <div class="row align-items-center flex-nowrap overflow-x-scroll">
            <div class="col-9 col-md-4 list-group">
                <div class="lists_wrapper p-4">
                    <div>
                        <div class="list_header d-flex justify-content-between align-items-center">

                            <a class="games_title">
                                <h2 class="text-white py-3">Top Sellers
                                </h2>
                            </a>

                            <div class="btn btn-outline-secondary text-uppercase text-light px-5 py-3">
                                View More
                            </div>
                        </div>
                        {{-- 6 games per collumn --}}
                        <div class="game_product_thumb">
                            <div class="game_product_avatar">
                                <div>
                                    <div class="d-flex align-items-center overflow-hidden">
                                        <img class="img-fluid" src="/storage/5.jpg" alt="thumnail">
                                    </div>
                                </div>
                            </div>
                            <div class="game_product_body">
                                <div class="game_title truncated">
                                    Division
                                </div>
                                <div class="game_product_description">
                                    <span class="badge bg-primary">-30%</span>
                                    <span class="game_product_price text-secondary">
                                        <span class="text-decoration-underline">đ</span>
                                        <span>990,000</span>
                                    </span>
                                    <span class="game_product_price text-light">
                                        <span class="text-decoration-underline text-light">đ</span>
                                        <span>693,000</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="game_product_thumb">
                            <div class="game_product_avatar">
                                <div>
                                    <div class="d-flex align-items-center overflow-hidden">
                                        <img class="img-fluid" src="/storage/5.jpg" alt="thumnail">
                                    </div>
                                </div>
                            </div>
                            <div class="game_product_body">
                                <div class="game_title truncated">
                                    Division
                                </div>
                                <div class="game_product_description">
                                    <span class="badge bg-primary">-30%</span>
                                    <span class="game_product_price text-secondary">
                                        <span class="text-decoration-underline">đ</span>
                                        <span>990,000</span>
                                    </span>
                                    <span class="game_product_price text-light">
                                        <span class="text-decoration-underline text-light">đ</span>
                                        <span>693,000</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="game_product_thumb">
                            <div class="game_product_avatar">
                                <div>
                                    <div class="d-flex align-items-center overflow-hidden">
                                        <img class="img-fluid" src="/storage/5.jpg" alt="thumnail">
                                    </div>
                                </div>
                            </div>
                            <div class="game_product_body">
                                <div class="game_title truncated">
                                    Division
                                </div>
                                <div class="game_product_description">
                                    <span class="badge bg-primary">-30%</span>
                                    <span class="game_product_price text-secondary">
                                        <span class="text-decoration-underline">đ</span>
                                        <span>990,000</span>
                                    </span>
                                    <span class="game_product_price text-light">
                                        <span class="text-decoration-underline text-light">đ</span>
                                        <span>693,000</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="game_product_thumb">
                            <div class="game_product_avatar">
                                <div>
                                    <div class="d-flex align-items-center overflow-hidden">
                                        <img class="img-fluid" src="/storage/5.jpg" alt="thumnail">
                                    </div>
                                </div>
                            </div>
                            <div class="game_product_body">
                                <div class="game_title truncated">
                                    Division
                                </div>
                                <div class="game_product_description">
                                    <span class="badge bg-primary">-30%</span>
                                    <span class="game_product_price text-secondary">
                                        <span class="text-decoration-underline">đ</span>
                                        <span>990,000</span>
                                    </span>
                                    <span class="game_product_price text-light">
                                        <span class="text-decoration-underline text-light">đ</span>
                                        <span>693,000</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="game_product_thumb">
                            <div class="game_product_avatar">
                                <div>
                                    <div class="d-flex align-items-center overflow-hidden">
                                        <img class="img-fluid" src="/storage/5.jpg" alt="thumnail">
                                    </div>
                                </div>
                            </div>
                            <div class="game_product_body">
                                <div class="game_title truncated">
                                    Division
                                </div>
                                <div class="game_product_description">
                                    <span class="badge bg-primary">-30%</span>
                                    <span class="game_product_price text-secondary">
                                        <span class="text-decoration-underline">đ</span>
                                        <span>990,000</span>
                                    </span>
                                    <span class="game_product_price text-light">
                                        <span class="text-decoration-underline text-light">đ</span>
                                        <span>693,000</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="game_product_thumb">
                            <div class="game_product_avatar">
                                <div>
                                    <div class="d-flex align-items-center overflow-hidden">
                                        <img class="img-fluid" src="/storage/5.jpg" alt="thumnail">
                                    </div>
                                </div>
                            </div>
                            <div class="game_product_body">
                                <div class="game_title truncated">
                                    Division
                                </div>
                                <div class="game_product_description">
                                    <span class="badge bg-primary">-30%</span>
                                    <span class="game_product_price text-secondary">
                                        <span class="text-decoration-underline">đ</span>
                                        <span>990,000</span>
                                    </span>
                                    <span class="game_product_price text-light">
                                        <span class="text-decoration-underline text-light">đ</span>
                                        <span>693,000</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-9 col-md-4 list-group">
                <div class="lists_wrapper p-4">
                    <div>
                        <div class="list_header d-flex justify-content-between align-items-center">

                            <a class="games_title">
                                <h2 class="text-white py-3">Most Played</h2>
                            </a>

                            <div class="btn btn-outline-secondary text-uppercase text-light px-5 py-3">
                                View More</div>
                        </div>
                        {{-- 6 games per collumn --}}
                        <div class="game_product_thumb">
                            <div class="game_product_avatar">
                                <div>
                                    <div class="d-flex align-items-center overflow-hidden">
                                        <img class="img-fluid" src="/storage/5.jpg" alt="thumnail">
                                    </div>
                                </div>
                            </div>
                            <div class="game_product_body">
                                <div class="game_title truncated">
                                    Division
                                </div>
                                <div class="game_product_description">
                                    <span class="badge bg-primary">-30%</span>
                                    <span class="game_product_price text-secondary">
                                        <span class="text-decoration-underline">đ</span>
                                        <span>990,000</span>
                                    </span>
                                    <span class="game_product_price text-light">
                                        <span class="text-decoration-underline text-light">đ</span>
                                        <span>693,000</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="game_product_thumb">
                            <div class="game_product_avatar">
                                <div>
                                    <div class="d-flex align-items-center overflow-hidden">
                                        <img class="img-fluid" src="/storage/5.jpg" alt="thumnail">
                                    </div>
                                </div>
                            </div>
                            <div class="game_product_body">
                                <div class="game_title truncated">
                                    Division
                                </div>
                                <div class="game_product_description">
                                    <span class="badge bg-primary">-30%</span>
                                    <span class="game_product_price text-secondary">
                                        <span class="text-decoration-underline">đ</span>
                                        <span>990,000</span>
                                    </span>
                                    <span class="game_product_price text-light">
                                        <span class="text-decoration-underline text-light">đ</span>
                                        <span>693,000</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="game_product_thumb">
                            <div class="game_product_avatar">
                                <div>
                                    <div class="d-flex align-items-center overflow-hidden">
                                        <img class="img-fluid" src="/storage/5.jpg" alt="thumnail">
                                    </div>
                                </div>
                            </div>
                            <div class="game_product_body">
                                <div class="game_title truncated">
                                    Division
                                </div>
                                <div class="game_product_description">
                                    <span class="badge bg-primary">-30%</span>
                                    <span class="game_product_price text-secondary">
                                        <span class="text-decoration-underline">đ</span>
                                        <span>990,000</span>
                                    </span>
                                    <span class="game_product_price text-light">
                                        <span class="text-decoration-underline text-light">đ</span>
                                        <span>693,000</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="game_product_thumb">
                            <div class="game_product_avatar">
                                <div>
                                    <div class="d-flex align-items-center overflow-hidden">
                                        <img class="img-fluid" src="/storage/5.jpg" alt="thumnail">
                                    </div>
                                </div>
                            </div>
                            <div class="game_product_body">
                                <div class="game_title truncated">
                                    Division
                                </div>
                                <div class="game_product_description">
                                    <span class="badge bg-primary">-30%</span>
                                    <span class="game_product_price text-secondary">
                                        <span class="text-decoration-underline">đ</span>
                                        <span>990,000</span>
                                    </span>
                                    <span class="game_product_price text-light">
                                        <span class="text-decoration-underline text-light">đ</span>
                                        <span>693,000</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="game_product_thumb">
                            <div class="game_product_avatar">
                                <div>
                                    <div class="d-flex align-items-center overflow-hidden">
                                        <img class="img-fluid" src="/storage/5.jpg" alt="thumnail">
                                    </div>
                                </div>
                            </div>
                            <div class="game_product_body">
                                <div class="game_title truncated">
                                    Division
                                </div>
                                <div class="game_product_description">
                                    <span class="badge bg-primary">-30%</span>
                                    <span class="game_product_price text-secondary">
                                        <span class="text-decoration-underline">đ</span>
                                        <span>990,000</span>
                                    </span>
                                    <span class="game_product_price text-light">
                                        <span class="text-decoration-underline text-light">đ</span>
                                        <span>693,000</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="game_product_thumb">
                            <div class="game_product_avatar">
                                <div>
                                    <div class="d-flex align-items-center overflow-hidden">
                                        <img class="img-fluid" src="/storage/5.jpg" alt="thumnail">
                                    </div>
                                </div>
                            </div>
                            <div class="game_product_body">
                                <div class="game_title truncated">
                                    Division
                                </div>
                                <div class="game_product_description">
                                    <span class="badge bg-primary">-30%</span>
                                    <span class="game_product_price text-secondary">
                                        <span class="text-decoration-underline">đ</span>
                                        <span>990,000</span>
                                    </span>
                                    <span class="game_product_price text-light">
                                        <span class="text-decoration-underline text-light">đ</span>
                                        <span>693,000</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-9 col-md-4 list-group">
                <div class="lists_wrapper p-4">
                    <div>
                        <div class="list_header d-flex justify-content-between align-items-center">

                            <a class="games_title">
                                <h2 class="text-white py-3">Coming Soon</h2>
                            </a>

                            <div class="btn btn-outline-secondary text-uppercase text-light px-5 py-3">
                                View More</div>
                        </div>
                        {{-- 6 games per collumn --}}
                        <div class="game_product_thumb">
                            <div class="game_product_avatar">
                                <div>
                                    <div class="d-flex align-items-center overflow-hidden">
                                        <img class="img-fluid" src="/storage/5.jpg" alt="thumnail">
                                    </div>
                                </div>
                            </div>
                            <div class="game_product_body">
                                <div class="game_title truncated">
                                    Division
                                </div>
                                <div class="game_product_description">
                                    <span class="badge bg-primary">-30%</span>
                                    <span class="game_product_price text-secondary">
                                        <span class="text-decoration-underline">đ</span>
                                        <span>990,000</span>
                                    </span>
                                    <span class="game_product_price text-light">
                                        <span class="text-decoration-underline text-light">đ</span>
                                        <span>693,000</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="game_product_thumb">
                            <div class="game_product_avatar">
                                <div>
                                    <div class="d-flex align-items-center overflow-hidden">
                                        <img class="img-fluid" src="/storage/5.jpg" alt="thumnail">
                                    </div>
                                </div>
                            </div>
                            <div class="game_product_body">
                                <div class="game_title truncated">
                                    Division
                                </div>
                                <div class="game_product_description">
                                    <span class="badge bg-primary">-30%</span>
                                    <span class="game_product_price text-secondary">
                                        <span class="text-decoration-underline">đ</span>
                                        <span>990,000</span>
                                    </span>
                                    <span class="game_product_price text-light">
                                        <span class="text-decoration-underline text-light">đ</span>
                                        <span>693,000</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="game_product_thumb">
                            <div class="game_product_avatar">
                                <div>
                                    <div class="d-flex align-items-center overflow-hidden">
                                        <img class="img-fluid" src="/storage/5.jpg" alt="thumnail">
                                    </div>
                                </div>
                            </div>
                            <div class="game_product_body">
                                <div class="game_title truncated">
                                    Division
                                </div>
                                <div class="game_product_description">
                                    <span class="badge bg-primary">-30%</span>
                                    <span class="game_product_price text-secondary">
                                        <span class="text-decoration-underline">đ</span>
                                        <span>990,000</span>
                                    </span>
                                    <span class="game_product_price text-light">
                                        <span class="text-decoration-underline text-light">đ</span>
                                        <span>693,000</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="game_product_thumb">
                            <div class="game_product_avatar">
                                <div>
                                    <div class="d-flex align-items-center overflow-hidden">
                                        <img class="img-fluid" src="/storage/5.jpg" alt="thumnail">
                                    </div>
                                </div>
                            </div>
                            <div class="game_product_body">
                                <div class="game_title truncated">
                                    Division
                                </div>
                                <div class="game_product_description">
                                    <span class="badge bg-primary">-30%</span>
                                    <span class="game_product_price text-secondary">
                                        <span class="text-decoration-underline">đ</span>
                                        <span>990,000</span>
                                    </span>
                                    <span class="game_product_price text-light">
                                        <span class="text-decoration-underline text-light">đ</span>
                                        <span>693,000</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="game_product_thumb">
                            <div class="game_product_avatar">
                                <div>
                                    <div class="d-flex align-items-center overflow-hidden">
                                        <img class="img-fluid" src="/storage/5.jpg" alt="thumnail">
                                    </div>
                                </div>
                            </div>
                            <div class="game_product_body">
                                <div class="game_title truncated">
                                    Division
                                </div>
                                <div class="game_product_description">
                                    <span class="badge bg-primary">-30%</span>
                                    <span class="game_product_price text-secondary">
                                        <span class="text-decoration-underline">đ</span>
                                        <span>990,000</span>
                                    </span>
                                    <span class="game_product_price text-light">
                                        <span class="text-decoration-underline text-light">đ</span>
                                        <span>693,000</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="game_product_thumb">
                            <div class="game_product_avatar">
                                <div>
                                    <div class="d-flex align-items-center overflow-hidden">
                                        <img class="img-fluid" src="/storage/5.jpg" alt="thumnail">
                                    </div>
                                </div>
                            </div>
                            <div class="game_product_body">
                                <div class="game_title truncated">
                                    Division
                                </div>
                                <div class="game_product_description">
                                    <span class="badge bg-primary">-30%</span>
                                    <span class="game_product_price text-secondary">
                                        <span class="text-decoration-underline">đ</span>
                                        <span>990,000</span>
                                    </span>
                                    <span class="game_product_price text-light">
                                        <span class="text-decoration-underline text-light">đ</span>
                                        <span>693,000</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
