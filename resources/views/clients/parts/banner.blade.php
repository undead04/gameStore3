<section class="bg-black py-5">
    <div class="container-md">
        <div class="row align-content-center banner_row">
            <div class="col-md-9 product_banner_wrapper">
                <div class="product_banner text-white rounded-4 overflow-hidden">
                    <div class="product_wallpaper">
                        <div class="product_banner_body">
                            <div class="product_banner_title">
                                <img class="img-fluid"
                                    src="https://cdn2.unrealengine.com/egs-ac-mirage-carousel-logo-350x143-c22cafeefdfb.png"
                                    alt="bannertitle">
                            </div>
                            <div class="product_publish">
                                <span>AVAILABLE OCTOBER 5</span>
                            </div>
                            <div class="product_description">
                                <span>Experience the story of Basim seeking answers and justice as he navigates the
                                    bustling
                                    streets of ninth-century Baghdad.</span>
                            </div>
                            <div class="product_actions">
                                <div class="btn btn-light btn-lg product_actions_buy">
                                    PRE-PURCHASE NOW
                                </div>
                                <div class="btn bg-transparent btn-lg product_actions_addcart">
                                    <div class="icon-plus"><i class="fa-solid fa-plus"></i></div>
                                    <span>ADD TO CART</span>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

            <div class="col-md-3">
                <div class="product_wrapper text-white">
                    @foreach ($viewData['games'] as $game)
                        <div class="game_product_thumb">
                            <div class="game_product_avatar">
                                <img class="img-fluid" src="{{ '/storage/' . $game->getIamge() }}" alt="thumnail">
                            </div>
                            <span class="game_title truncated">
                                {{ $game->getNameGame() }}
                            </span>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
