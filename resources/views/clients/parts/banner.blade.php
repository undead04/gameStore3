<section class="bg-black">
    <div class="container-md">
        <div class="row align-content-center banner_row">
            <div class="col-md-9 product_banner_wrapper">
                <div id="carouselBanner" class="carousel slide"
                    data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        @for ($i = 0; $i < count($viewData['paner']); $i++)
                            @if ($i == 0)
                                <button type="button"
                                    data-bs-target="#carouselBanner"
                                    data-bs-slide-to="{{ $i }}"
                                    class="active" aria-current="true"
                                    aria-label="Slide {{ $i }}">
                                </button>
                            @else
                                <button type="button"
                                    data-bs-target="#carouselBanner"
                                    data-bs-slide-to="{{ $i }}"
                                    aria-label="Slide {{ $i }}">
                                </button>
                            @endif
                        @endfor
                    </div>
                    <div class="carousel-inner carousel_wrapper">
                        @foreach ($viewData['paner'] as $games)
                            <a
                                href="{{ route('clients.gamesDetail', ['id' => $games->getGameId()]) }}">
                                <div class="carousel-item  ">
                                    <img src="{{ '/storage/' . $games->getImagePaner() }}"
                                        class="d-block w-100"
                                        alt="Game Store 3">
                                    <div
                                        class="carousel-caption d-md-block banner_body">
                                        <div class="banner_description">
                                            <div
                                                class="banner-head_name fs-big">
                                                {{ $games->name_Game }}
                                            </div>
                                            <div
                                                class="banner-head_description fs-primary truncated-2 d-none d-webkit-box">
                                                {{ $games->description }}
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </a>
                        @endforeach


                    </div>
                    <button class="carousel-control-prev d-none" type="button"
                        data-bs-target="#carouselBanner" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon"
                            aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next d-none" type="button"
                        data-bs-target="#carouselBanner" data-bs-slide="next">
                        <span class="carousel-control-next-icon"
                            aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>

            <div class="col-md-3 d-none d-md-block">
                <div class="product_wrapper text-white">
                    @foreach ($viewData['paner'] as $game)
                        <div class="game_product_thumb">
                            <div class="game_product_avatar">
                                <div>
                                    <div
                                        class="d-flex align-items-center overflow-hidden">
                                        <img class="img-fluid"
                                            src="{{ '/storage/' . $game->getImage() }}"
                                            alt="thumnail" />
                                    </div>
                                </div>
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
    <script>
        const firstCarouselElement = document.querySelectorAll(".carousel-item");

        for (let i = 0; i < firstCarouselElement.length; i++) {

            if (firstCarouselElement[i].classList.contains("carousel-item")) {

                firstCarouselElement[i].classList.add("active");
                break;
            }
        }
    </script>
</section>
