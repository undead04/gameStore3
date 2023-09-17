<div class="col-6 col-md-2-4">
    <div>
        <a
            href="{{ route('clients.gamesDetail', ['id' => $games->getGameId()]) }}">
            <div class="card bg-dark games-item">
                <div class="game_picture">
                    <div class="game_picture_wrapper">
                        <img class="img-fluid"
                            src="{{ '/storage/' . $games->getImage() }}"
                            alt="">

                    </div>

                </div>
                <div class="card-body">
                    <div class="card-text text-secondary game_base">BASE GAME
                    </div>
                    <div class="card-text text-light game_title truncated ps-0">
                        {{ $games->getNameGame() }}</div>
                    <div
                        class="card-footer game_price d-flex align-items-center justify-content-between">
                        @if ($games->getPrice() == 0)
                            <div></div>
                            <div class="game_price text-light">
                                <span
                                    class="game_new_price fw-bold mt-3">Free</span>
                            </div>
                        @else
                            <div>
                                <div
                                    class="badge bg-primary me-3 {{ $games->getDiscount() == 0 ? 'd-none' : 'd-inline-block' }}">
                                    -{{ $games->getDiscount() . '%' }}
                                </div>
                            </div>

                            <div class="game_price">
                                <div
                                    class="text-decoration-line-through text-secondary game_old_price">
                                    <span>{{ $games->getDiscount() == 0 ? '' : '₫' . number_format($games->getPrice(), 0, '.', ',') }}</span>
                                </div>
                                <div class="text-light game_new_price">
                                    <span>₫{{ number_format($games->getPrice() * (1 - $games->getDiscount() / 100), 0, '.', ',') }}</span>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </a>
    </div>
</div>
