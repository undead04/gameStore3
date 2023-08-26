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
                        <div class="game-details_description">
                            <p>{{ $viewData['game']->getDescription() }}</p>
                        </div>
                        <div class="game-details_tags d-flex">
                            <div class="game-details_tag">
                                <div>Genres</div>
                                <a href="">{{ $viewData['type']->getTypeGame() }}</a>,
                                <a href="">Exploration</a>,
                                <a href="">Open world</a>
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
                                <p class="game-details_notify-content">Early Access games are still under development and
                                    may change significantly over time. As
                                    a result, you may experience unforeseen issues or completely new gameplay elements while
                                    playing this game.</p>
                                <p class="game-details_notify-content">You can play now to experience the game while it's
                                    being built or wait until it offers a
                                    more complete experience.</p>
                                <a href="">Learn more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="d-flex flex-column game-details-side_wrapper">
                        <div class="game-details-side_avatar">
                            <div class="picture16x9">
                                <img class="img-fluid"
                                    src="https://cdn1.epicgames.com/spt-assets/2d4f1465e9254425b5b03c8a429d4d9b/oirbo-logo-k3yyp.png?h=270&quality=medium&resize=1&w=480"
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
                                <div class="btn btn-sm btn-secondary">BASE GAME</div>
                            </div>
                            <div class="game-details_category">
                                <div class="btn btn-sm btn-secondary">EARLY ACCESS</div>
                            </div>
                        </div>
                        <div class="game-details_prices">
                            <div class="game-details_saleoff bg-primary">-15%</div>
                            <div class="game-details_oldprice text-decoration-line-through text-secondary">
                                đ157,000
                            </div>
                            <div class="game-details_curprice">
                                đ133,450
                            </div>
                        </div>
                        <div class="game-details_saleoff-deadline">
                            <span>Sale ends 8/28/2023 at 7:00 AM</span>
                        </div>
                        <div class="game-details_buynow w-75 btn btn-lg btn-primary text-center">
                            BUY NOW
                        </div>
                        <div class="game-details_addcart w-75 btn btn-lg btn-outline-light text-center">
                            ADD TO CART
                        </div>
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
                                <span>{{ $viewData['game']->getDeveloper() }}</span>
                            </li>
                            <li class="game-details_info">
                                <span>Publisher</span>
                                <span>ImaginationOverflow</span>
                            </li>
                            <li class="game-details_info">
                                <span>Realease Date</span>
                                <span>07/19/23</span>
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
@endsection
