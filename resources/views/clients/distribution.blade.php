@extends('layouts.client')
@section('title', 'Distribution | Game Store')
@section('content')
    <section class="pb-5 bg-black">
        <div class="container-md"
            style="background: linear-gradient(315deg, rgb(32, 14, 67), rgb(3, 5, 86), rgb(4, 4, 24)) rgb(3, 5, 86);">
            <div class="row g-0">
                <div class="col-md-6">
                    <img src="https://cdn2.unrealengine.com/epic-games-store-self-service-publishing-tools-4554ceb470ed.webp"
                        alt="" class="img-fluid" />
                </div>
                <div class="col-md-6">
                    <div class="text-center pe-5">
                        <div class="w-50 mx-auto"><img src="form.svg"
                                alt="">
                        </div>
                        <div class="fw-bold display-5 text-light">Now open to all
                            developers
                            and publishers</div>
                        <div><a href="{{ route('register') }}"
                                class="btn btn-lg btn-light w-50 p-3 mt-5">SIGN UP
                                TODAY</a></div>
                        <p class="fs-4 text-light mt-5">Start distributing PC games
                            on
                            the Epic
                            Games Store with
                            our new self-service publishing tools.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-black">
        <div class="container-md">
            <div class="row">
                <div class="col-md-4">
                    <div @style(['border-radius: 16px', 'border: 1px solid rgba(255, 255, 255, 0.1)', 'width: 100%', 'overflow: hidden', 'background: rgb(18, 18, 18)'])>
                        <div class="css-15asfpy" @style(['display: -webkit-box', 'display: -webkit-flex', 'display: -ms-flexbox', 'display: flex', '-webkit-flex-direction: column', '-ms-flex-direction: column', 'flex-direction: column', '-webkit-align-items: center', '-webkit-box-align: center', '-ms-flex-align: center', 'align-items: center', 'padding: 40px', 'gap: 20px'])>
                            <div class="css-1u0fn3j"
                                data-testid="marketing-card-image"
                                @style(['width: 160px', 'height: 160px', 'display: flex', 'justify-content: center'])>
                                <img src="https://cdn2.unrealengine.com/direct-game-distribution-06596600236d.svg"
                                    class="css-8atqhb">
                            </div>
                            <div class="css-1m34uw2" @style(['display: -webkit-box', 'display: -webkit-flex', 'display: -ms-flexbox', 'display: flex', '-webkit-flex-direction: column', '-ms-flex-direction: column', 'flex-direction: column', 'gap: 20px', 'text-align: center', '-webkit-flex: 1', '-ms-flex: 1', 'flex: 1', 'color: white'])>
                                <h2 class="css-3q6xn0">Reach a Global Audience</h2>
                                <div data-testid="marketing-card-subtitle">
                                    <h3 class="css-1feez8y">Direct distribution to
                                        over
                                        230 million Epic users across 187 countries
                                        with
                                        16 languages supported.</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div @style(['border-radius: 16px', 'border: 1px solid rgba(255, 255, 255, 0.1)', 'width: 100%', 'overflow: hidden', 'background: rgb(18, 18, 18)'])>
                        <div class="css-15asfpy" @style(['display: -webkit-box', 'display: -webkit-flex', 'display: -ms-flexbox', 'display: flex', '-webkit-flex-direction: column', '-ms-flex-direction: column', 'flex-direction: column', '-webkit-align-items: center', '-webkit-box-align: center', '-ms-flex-align: center', 'align-items: center', 'padding: 40px', 'gap: 20px'])>
                            <div class="css-1u0fn3j"
                                data-testid="marketing-card-image"
                                @style(['width: 160px', 'height: 160px', 'display: flex', 'justify-content: center'])>
                                <img src="https://cdn2.unrealengine.com/direct-game-distribution-06596600236d.svg"
                                    class="css-8atqhb">
                            </div>
                            <div class="css-1m34uw2" @style(['display: -webkit-box', 'display: -webkit-flex', 'display: -ms-flexbox', 'display: flex', '-webkit-flex-direction: column', '-ms-flex-direction: column', 'flex-direction: column', 'gap: 20px', 'text-align: center', '-webkit-flex: 1', '-ms-flex: 1', 'flex: 1', 'color: white'])>
                                <h2 class="css-3q6xn0">Reach a Global Audience</h2>
                                <div data-testid="marketing-card-subtitle">
                                    <h3 class="css-1feez8y">Direct distribution to
                                        over
                                        230 million Epic users across 187 countries
                                        with
                                        16 languages supported.</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div @style(['border-radius: 16px', 'border: 1px solid rgba(255, 255, 255, 0.1)', 'width: 100%', 'overflow: hidden', 'background: rgb(18, 18, 18)'])>
                        <div class="css-15asfpy" @style(['display: -webkit-box', 'display: -webkit-flex', 'display: -ms-flexbox', 'display: flex', '-webkit-flex-direction: column', '-ms-flex-direction: column', 'flex-direction: column', '-webkit-align-items: center', '-webkit-box-align: center', '-ms-flex-align: center', 'align-items: center', 'padding: 40px', 'gap: 20px'])>
                            <div class="css-1u0fn3j"
                                data-testid="marketing-card-image"
                                @style(['width: 160px', 'height: 160px', 'display: flex', 'justify-content: center'])>
                                <img src="https://cdn2.unrealengine.com/direct-game-distribution-06596600236d.svg"
                                    class="css-8atqhb">
                            </div>
                            <div class="css-1m34uw2" @style(['display: -webkit-box', 'display: -webkit-flex', 'display: -ms-flexbox', 'display: flex', '-webkit-flex-direction: column', '-ms-flex-direction: column', 'flex-direction: column', 'gap: 20px', 'text-align: center', '-webkit-flex: 1', '-ms-flex: 1', 'flex: 1', 'color: white'])>
                                <h2 class="css-3q6xn0">Reach a Global Audience</h2>
                                <div data-testid="marketing-card-subtitle">
                                    <h3 class="css-1feez8y">Direct distribution to
                                        over
                                        230 million Epic users across 187 countries
                                        with
                                        16 languages supported.</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
