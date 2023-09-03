@foreach ($viewData['games'] as $game)
    <div class="col-9 col-md-2-4">
        <div>
            <a
                href="{{ route('clients.gamesDetail', ['id' => $game->getGameId()]) }}">
                <div class="card bg-dark games-item">
                    <div class="game_picture">
                        <div class="game_picture_wrapper">
                            <img class="img-fluid"
                                src="{{ '/storage/' . $game->getIamge() }}"
                                alt="">

                        </div>

                    </div>
                    <div class="card-body">
                        <div class="card-text text-secondary game_base">BASE GAME
                        </div>
                        <div class="card-text text-light game_title truncated">
                            {{ $game->getNameGame() }}</div>
                        <div
                            class="card-footer d-flex align-items-center justify-content-between">
                            <div
                                class="rounded-2 bg-primary text-white game_saleoff">
                                -10%</div>
                            <div class="games_price">
                                <div
                                    class="text-decoration-line-through text-secondary game_old_price">
                                    đ10000
                                </div>
                                <div class="text-light game_new_price">
                                    {{ $game->getPrice() }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
@endforeach
{{-- @foreach ($viewData['game'] as $game)
                    <div class="col-md-2-4">
                        <div>
                            <a href="{{ route('clients.gamesDetail', ['id' => $game->getGameId()]) }}">
                                <div class="card bg-dark games-item">
                                    <div class="game_picture">
                                        <div class="game_picture_wrapper">
                                            <img class="img-fluid" src="{{ '/storage/app' . $game->getIamge() }}" alt="">
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-text text-secondary game_base">BASE GAME</div>
                                        <div class="card-text text-light game_title truncated">{{ $game->getNameGame() }}</div>
                                        <div class="card-footer d-flex align-items-center justify-content-between">
                                            <div class="rounded-2 bg-primary text-white game_saleoff">-10%</div>
                                            <div class="games_price">
                                                <div class="text-decoration-line-through text-secondary game_old_price">
                                                    đ10000
                                                </div>
                                                <div class="text-light game_new_price">{{ $game->getPrice() }}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        
                    </div>
                @endforeach --}}
