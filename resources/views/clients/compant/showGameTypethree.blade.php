<div class="col-9 col-md-4 list-group">
    <div class="lists_wrapper p-4">
        <div>
            <div class="list_header d-flex justify-content-between align-items-center">

                <span>
                    <h2 class="text-white py-3">{{ $types->getTypeGame() }}
                    </h2>
                </span>

                <a class="btn btn-outline-secondary text-uppercase text-light px-5 py-3"
                    href="{{ route('clients.viewMore', ['type' => $types->getTypeGame()]) }}">
                    view More
                </a>
            </div>
            {{-- 6 games per collumn --}}
            @foreach ($types->typeGame->take(6) as $typeGames)
                <a href="{{ route('clients.gamesDetail', ['id' => $typeGames->games->getGameId()]) }}">
                    <div class="game_product_thumb">
                        <div class="game_product_avatar">
                            <div>
                                <div class="d-flex align-items-center overflow-hidden">
                                    <img class="img-fluid" src="{{ '/storage/' . $typeGames->games->getImage() }}"
                                        alt="thumnail">
                                </div>
                            </div>
                        </div>
                        <div class="game_product_body">
                            <div class="game_title truncated">
                                {{ $typeGames->games->getNameGame() }}
                            </div>
                            <div class="game_product_description">

                                @if ($typeGames->games->getPrice() == 0 || $typeGames->games->getDiscount() == 100)
                                    <span class="game_product_price text-light">Free</span>
                                @else
                                    @if ($typeGames->games->getDiscount() > 0)
                                        <span
                                            class="badge bg-primary">{{ '-' . $typeGames->games->getDiscount() . '%' }}</span>
                                        <span class="game_product_price text-secondary text-decoration-line-through">
                                            <span>₫{{ number_format($typeGames->games->getPrice(), 3, '.', ',') }}</span>
                                        </span>
                                        <span class="game_product_price text-light">
                                            ₫{{ number_format($typeGames->games->getPrice() - ($typeGames->games->getPrice() * $typeGames->games->getDiscount()) / 100, 3, '.', ',') }}
                                        </span>
                                    @else
                                        <span class="game_product_price text-light">
                                            <span>₫{{ number_format($typeGames->games->getPrice(), 3, '.', ',') }}</span>
                                        </span>
                                    @endif
                                @endif
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</div>
