<div
    class="search_result_title bg-dark border-bottom border-secondary text-light">
    {{ count($viewData['searchGame']) }} games found</div>
<div class="search_result_wrapper text-white bg-dark">
    @foreach ($viewData['searchGame'] as $search)
        <a href="{{ route('clients.gamesDetail', ['id' => $search->getGameId()]) }}"
            class="game_product_thumb">
            <div class="game_product_avatar">
                <div>
                    <div class="d-flex align-items-center overflow-hidden">
                        <img class="img-fluid"
                            src="{{ '/storage/' . $search->getIamge() }}"
                            alt="thumnail">
                    </div>
                </div>
            </div>
            <span class="game_title truncated text-light">
                {{ $search->getNameGame() }}
            </span>
        </a>
    @endforeach
</div>
