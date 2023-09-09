@extends('layouts.games')
@section('title', $viewData['title'])
@section('content')
    <section class="bg-black text-white py-5">
        <div class="container-md">
            <div class="row">
                <div class="col-md-7">
                    <div>
                        <span class="d-block game-details_title">
                            {{ $viewData['game']->getNameGame() }}
                        </span>
                        <div class="game-details_tabs">
                            <div class="game-details_overview">
                                <span> Overview</span>
                            </div>
                        </div>
                        <div class="game-details_avatar">
                            <div class="picture16x9">
                                <img class="img-fluid" src="{{ '/storage/' . $viewData['game']->getIamge() }}"
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
                                    This is an Early Access Game
                                </span>
                                <p class="game-details_notify-content">
                                    {{ $viewData['game']->getDescription() }}</p>

                                <a href="">Learn more</a>
                            </div>
                        </div>
                        <div class="game-details_description">
                            <p class="text-light">Assemble yourself in a hostile
                                spacecraft where
                                almost everything that moves is trying to get you.
                                The reason? Yours to discover!</p>
                            <p>Explore, fight, and learn your purpose in this
                                galactic action-adventure.</p>
                            <p>Oirbo is a 2D action-platformer adventure that takes
                                place on a huge spacecraft divided into
                                interconnected areas. Search in every section for
                                the pieces that make out the history of the journey
                                and enhance your skills and components to get to new
                                heights.</p>
                            <p>Explore a massive spaceship to find answers, but
                                beware the army of robots that are coming for you;
                                avoid them; fight them or simply outsmart them in
                                this futuristic hand-drawn adventure in space!</p>
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
                        <div class="contact_group">
                            <span class="game_details_title">Follow us</span>
                            <div class="contact_group_body bg-dark">
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
                <div class="col-md-5">
                    <div class="d-flex flex-column game-details-side_wrapper">
                        <div class="game-details-side_avatar">
                            <div class="picture16x9">
                                <img class="img-fluid"
                                    src="{{ '/storage/' . $viewData['game']->developer->getDeveloperImage() }}"
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
                        <div class="game-details_categories d-flex">
                            <div class="game-details_category">
                                <div class="btn btn-sm btn-secondary">BASE GAME
                                </div>
                            </div>
                            <div class="game-details_category">
                                <div class="btn btn-sm btn-secondary">EARLY ACCESS
                                </div>
                            </div>
                        </div>
                        <div class="game-details_prices">
                            <div class="game-details_saleoff bg-primary">-15%</div>
                            <div class="game-details_oldprice text-decoration-line-through text-secondary">
                                đ157,000
                            </div>
                            <div class="game-details_curprice">
                                <span
                                    class="text-decoration-underline">đ</span><span>{{ $viewData['game']->getPrice() }}</span>
                                {{-- {{ viewData['game']->getPrice() }} --}}
                            </div>
                        </div>
                        <div class="game-details_saleoff-deadline">
                            <span>Sale ends 8/28/2023 at 7:00 AM</span>
                        </div>
                        <div class="game-details_buynow w-75 btn btn-lg btn-primary text-center">
                            BUY NOW
                        </div>
                        <form action="{{ route('cart.add', ['id' => $viewData['game']->getGameId()]) }}" method="post">
                            @csrf
                            <button type="submit"
                                class="game-details_addcart w-75 btn btn-lg btn-outline-light text-center">
                                ADD TO CART
                            </button>
                        </form>
                        <ul class="game-details_support-infoes">
                            <li class="game-details_info">
                                <span>Epic reward</span>
                                <span>5% back</span>
                            </li>
                            <li class="game-details_info">
                                <span>Refund type</span>
                                <span>Self-Refundable</span>
                            </li>
                            <li class="game-details_info">
                                <span>Developer</span>
                                <span>{{ $viewData['game']->developer->getDeveloperName() }}</span>
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
