@extends('layouts.games')
@section('title', $viewData['title'])
@section('content')
    <section class="bg-black text-white py-5">
        <link href="{{ asset('/css//clients/gamesDetail.css') }}" rel="stylesheet" />

        <div class="container-md">
            <div class="row">
                <div class="col-md-7">
                    <div>
                        <span class="d-block game-details_title">
                            {{ $viewData['game']->getNameGame() }}
                        </span>
                        <div class="game-details_tabs">
                            <div class="game-details_overview">
                                <span>Overview</span>
                            </div>
                        </div>
                        <div class="game-details_avatar">
                            <div class="picture16x9">
                                <img class="img-fluid" src="{{ '/storage/' . $viewData['game']->getImagePaner() }}"
                                    alt="">
                            </div>

                        </div>
                        <div class="game_details_title">
                            <p>Description</p>
                        </div>
                        <div class="game-details_tags d-flex">
                            <div class="game-details_tag">
                                <div>Genres</div>
                                @foreach ($viewData['game']->typegame as $typeGame)
                                    <a href="">{{ $typeGame->type->getTypeGame() }}</a>
                                @endforeach
                            </div>
                            <div class="game-details_tag">
                                <div>Feature</div>
                                <a href="">Cloud Saves</a>
                                <a href="">Controller Support</a>
                                <a href="">Single Player</a>
                            </div>
                        </div>
                        <div class="game-details_notify">
                            <div>
                                <span class="game-details_notify-title">
                                    {{ $viewData['game']->getNameGame() }}
                                </span>
                                <p class="game-details_notify-content">
                                    {{ $viewData['game']->getDescription() }}</p>

                                <a href="">Learn more</a>
                            </div>
                        </div>
                        <div class="game-details_description">
                            <div>
                                <div class="collapse mb-3" id="game_details_description">
                                    <ul class="game_details_description-list">
                                        <li>Beautiful hand-drawn art</li>
                                        <li>Classic platforming and combat system
                                        </li>
                                        <li>Classic platforming and combat system
                                        </li>
                                        <li>Not a single line of human text to read!
                                        </li>
                                    </ul>
                                </div>
                                <button
                                    class="btn bg-secondary-subtle w-100 btn-lg py-4 display-5 text-uppercase btn-viewMore fw-bold"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#game_details_description"
                                    aria-expanded="false" aria-controls="game_details_description">
                                    Show more
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="d-flex flex-column pt-5 pt-md-0 ps-md-5 px-3 px-md-0 game-details-side_wrapper">
                        <div class="game-details-side_avatar">
                            <div class="picture16x9">
                                <img class="img-fluid" src="{{ '/storage/' . $viewData['game']->getImageLogo() }}"
                                    alt="">
                            </div>
                        </div>
                        <div class="limited-age_labels">
                            <div class="picture3x3">
                                <img class="img-fluid p-3"
                                    src="https://cdn1.epicgames.com/gameRating/gameRating/Generic_3_192_192x192-72a92137911caf672a39f2e654be341d"
                                    alt="">
                            </div>
                        </div>
                        <div class="mt-4 align-items-center  d-flex">
                            <div class="badge bg-secondary p-2">
                                BASE GAME
                            </div>
                            <div class="badge bg-secondary p-2 ms-2">
                                EARLY ACCESS
                            </div>
                        </div>
                        <div class="game-details_prices">
                            @if ($viewData['game']->getPrice() == 0)
                                <div class="game-details_curprice">

                                </div>
                            @else
                                @if ($viewData['game']->getDiscount() > 0)
                                    <div class="badge py-3 px-4 bg-primary fs-secondary">
                                        {{ '-' . $viewData['game']->getDiscount() . '%' }}
                                    </div>
                                    <div class="fs-primary text-decoration-line-through text-secondary ms-2">
                                        <span>₫{{ number_format($viewData['game']->getPrice(), 3, '.', ',') }}</span>

                                    </div>
                                    <div class="fs-secondary ms-2">
                                        <span>₫{{ number_format($viewData['game']->getPrice() - ($viewData['game']->getPrice() * $viewData['game']->getDiscount()) / 100, 3, '.', ',') }}</span>
                                    </div>
                                @else
                                    <div class="fs-secondary ms-2">
                                        <span>₫{{ number_format($viewData['game']->getPrice(), 3, '.', ',') }}</span>
                                    </div>
                                @endif
                            @endif
                        </div>
                        <div class="game-details_saleoff-deadline">
                            <span>Sale ends 8/28/2023 at 7:00 AM</span>
                        </div>
                        <form action="{{ route('cart.purchaseNow', ['id' => $viewData['game']->getGameId()]) }}"
                            method="post">
                            @csrf
                            <button type="submit" class="game-details_buynow w-100 btn btn-lg btn-primary text-center">
                                BUY NOW
                            </button>
                        </form>
                        <form action="{{ route('cart.add', ['id' => $viewData['game']->getGameId()]) }}" method="post">
                            @csrf
                            <button type="submit"
                                class="game-details_addcart w-100 btn btn-lg btn-outline-light text-center">
                                ADD TO CART
                            </button>
                        </form>
                        <ul class="game-details_support-infoes">
                            <li class="game-details_info w-100 w-md-75">
                                <span>Epic reward</span>
                                <span>5% back</span>
                            </li>
                            <li class="game-details_info">
                                <span>Refund type</span>
                                <span>Self-Refundable</span>
                            </li>
                            <li class="game-details_info">
                                <span>Developer</span>
                                <span>{{ $viewData['game']->getDeveloper() }}</span>
                            </li>
                            <li class="game-details_info">
                                <span>Publisher</span>
                                <span>{{ $viewData['game']->getPublisher() }}</span>
                            </li>
                            <li class="game-details_info">
                                <span>Realease Date</span>
                                <span>{{ $viewData['game']->getCreateAt() }}</span>
                            </li>
                            <li class="game-details_info">
                                <span>Platform</span>
                                <span>Window</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-7">
                    <div class="contact_group">
                        <span class="game_details_title">Follow us</span>
                        <div class="contact_group_body py-5 p-md-5 bg-dark">
                            <a href="#" class="text-secondary"><i class="fa-brands fa-twitter"></i></a>
                            <a href="#" class="text-secondary"><i class="fa-solid fa-earth-americas"></i></a>
                            <a href="#" class="text-secondary"><i class="fa-brands fa-instagram"></i></a>
                            <a href="#" class="text-secondary"><i class="fa-brands fa-facebook"></i></a>
                            <a href="#" class="text-secondary"><i class="fa-brands fa-youtube"></i></a>
                            <a href="#" class="text-secondary"><i class="fa-brands fa-discord"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        const viewBtn = document.querySelector('.btn-viewMore');
        viewBtn.onclick = () => {
            viewBtn.innerText = viewBtn.innerText.toLowerCase() ===
                "show more" ? "show less" :
                "show more"
        }
    </script>
@endsection
