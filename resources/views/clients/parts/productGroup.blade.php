<section class="bg-black pb-5">
    @foreach ($viewData['gameAction'] as $types)
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
                @foreach ($types->typeGame->take(4) as $typeGames)
                    <div class="col-12 col-md-3">
                        <div class="pb-3">
                            <a href="{{ route('clients.gamesDetail', ['id' => $typeGames->games->getGameId()]) }}"
                                class="card bg-transparent text-light">
                                <div class="game_picture product_group">
                                    <div class="game_picture_wrapper txf">
                                        <img src="{{ '/storage/' . $typeGames->games->getImage() }}"
                                            class="card-img-top rounded-4"
                                            alt="{{ $typeGames->games->getNameGame() }}">
                                    </div>
                                </div>
                                <div class="card-body mt-3">
                                    <h5
                                        class="card-title productGroup_item_title truncated">
                                        {{ $typeGames->games->getNameGame() }}
                                    </h5>
                                    <p
                                        class="card-text truncated-3 productGroup_description">
                                        {{ $typeGames->games->getDescription() }}
                                    </p>
                                    @if ($typeGames->games->getPrice() == 0)
                                        <span
                                            class="productGroup_price_label">Free</span>
                                    @else
                                        <span class="productGroup_price_label">
                                            <span
                                                class="d-flex justify-content-between">
                                                @if ($typeGames->games->getDiscount() == 0)
                                                    <div></div>
                                                @else
                                                    <div
                                                        class="badge py-2 px-3 fs-secondary bg-primary">
                                                        -{{ $typeGames->games->getDiscount() }}%
                                                    </div>
                                                @endif
                                                <span>
                                                    ₫{{ $typeGames->games->getPrice() * (1 - $typeGames->games->getDiscount() / 100) }}
                                                </span>
                                            </span>
                                    @endif
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endforeach
</section>


<section class="bg-black pb-5">
    <div class="container-md mb-3">
        <div class="row align-items-center flex-nowrap overflow-x-scroll">
            @foreach ($viewData['gameAd-si-ro'] as $types)
                @include('clients.compant.showGameTypethree')
            @endforeach
        </div>
    </div>
</section>

@foreach ($viewData['gameStrategy'] as $types)
    @include('clients.compant.showGameType')
@endforeach

@foreach ($viewData['gameSports'] as $types)
    @include('clients.compant.showGameType')
@endforeach

<section class="bg-black pb-5">
    <div class="container-md mb-3">
        <div class="row align-items-center flex-nowrap overflow-x-scroll">
            @foreach ($viewData['gameMM-Ca-Ho'] as $types)
                @include('clients.compant.showGameTypethree')
            @endforeach
        </div>
    </div>
</section>
