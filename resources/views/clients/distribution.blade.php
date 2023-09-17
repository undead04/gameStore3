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
                    <div class="text-center pe-0 pe-md-5">
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
            <div class="row g-0 g-md-5">
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
                                    <h3 class="css-1feez8y truncated-4">Direct
                                        distribution to
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
                                <img src="https://cdn2.unrealengine.com/video-game-revenue-c74196d72f94.svg"
                                    class="css-8atqhb">
                            </div>
                            <div class="css-1m34uw2" @style(['display: -webkit-box', 'display: -webkit-flex', 'display: -ms-flexbox', 'display: flex', '-webkit-flex-direction: column', '-ms-flex-direction: column', 'flex-direction: column', 'gap: 20px', 'text-align: center', '-webkit-flex: 1', '-ms-flex: 1', 'flex: 1', 'color: white'])>
                                <h2 class="css-3q6xn0">88%/12% Revenue Split</h2>
                                <div data-testid="marketing-card-subtitle">
                                    <h3 class="css-1feez8y truncated-4">Keep 88% of
                                        the revenue
                                        and monitor product performance with
                                        integrated analytics dashboards.</h3>
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
                                <img src="https://cdn2.unrealengine.com/player-engagement-69f0a2ba31cd.svg"
                                    class="css-8atqhb">
                            </div>
                            <div class="css-1m34uw2" @style(['display: -webkit-box', 'display: -webkit-flex', 'display: -ms-flexbox', 'display: flex', '-webkit-flex-direction: column', '-ms-flex-direction: column', 'flex-direction: column', 'gap: 20px', 'text-align: center', '-webkit-flex: 1', '-ms-flex: 1', 'flex: 1', 'color: white'])>
                                <h2 class="css-3q6xn0">Drive Player Engagement</h2>
                                <div data-testid="marketing-card-subtitle">
                                    <h3 class="css-1feez8y truncated-4">Tap into
                                        store features
                                        like wishlists, achievements, store-wide
                                        promotions and more!</h3>
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
                                <img src="https://cdn2.unrealengine.com/epic-games-payment-methods-18cc6135990f.svg"
                                    class="css-8atqhb">
                            </div>
                            <div class="css-1m34uw2" @style(['display: -webkit-box', 'display: -webkit-flex', 'display: -ms-flexbox', 'display: flex', '-webkit-flex-direction: column', '-ms-flex-direction: column', 'flex-direction: column', 'gap: 20px', 'text-align: center', '-webkit-flex: 1', '-ms-flex: 1', 'flex: 1', 'color: white'])>
                                <h2 class="css-3q6xn0">Worldwide E-Commerce</h2>
                                <div data-testid="marketing-card-subtitle">
                                    <h3 class="css-1feez8y truncated-4">Epic's
                                        payment service
                                        supports 76 payment methods with 47 regional
                                        currencies and more on the way.!</h3>
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
                                <img src="https://cdn2.unrealengine.com/epic-games-wallet-2af74bb47a7a.svg"
                                    class="css-8atqhb">
                            </div>
                            <div class="css-1m34uw2" @style(['display: -webkit-box', 'display: -webkit-flex', 'display: -ms-flexbox', 'display: flex', '-webkit-flex-direction: column', '-ms-flex-direction: column', 'flex-direction: column', 'gap: 20px', 'text-align: center', '-webkit-flex: 1', '-ms-flex: 1', 'flex: 1', 'color: white'])>
                                <h2 class="css-3q6xn0">Epic Wallet</h2>
                                <div data-testid="marketing-card-subtitle">
                                    <h3 class="css-1feez8y truncated-4">Users can
                                        load up their
                                        Wallet with funds to spend on products and
                                        services in the store, now available in more
                                        than 140 countries.
                                    </h3>
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
                                <img src="https://cdn2.unrealengine.com/game-ratings-localization-and-affliate-network-benefits-a931a6cb27b8.svg"
                                    class="css-8atqhb">
                            </div>
                            <div class="css-1m34uw2" @style(['display: -webkit-box', 'display: -webkit-flex', 'display: -ms-flexbox', 'display: flex', '-webkit-flex-direction: column', '-ms-flex-direction: column', 'flex-direction: column', 'gap: 20px', 'text-align: center', '-webkit-flex: 1', '-ms-flex: 1', 'flex: 1', 'color: white'])>
                                <h2 class="css-3q6xn0">Additional Benefits</h2>
                                <div data-testid="marketing-card-subtitle">
                                    <h3 class="css-1feez8y truncated-4">Easy IARC
                                        ratings in
                                        Epic Developer Portal, request no-cost
                                        localization for store pages and activate
                                        our Support-A-Creator affiliate network.
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="FAQ_section bg-black py-5">
        <div class="accordion_section container-md">
            <div class="d-flex justify-content-center mb-4"><span
                    class="text-light fs-big">Frequently Asked
                    Questions</span>
            </div>
            <div class="accordion" id="accordionPanelsStayOpenExample">
                <div class="accordion-item fs-primary bg-dark text-light">
                    <h2 class="accordion-header">
                        <button
                            class="accordion-button accordion-button-hover-primary bg-dark text-light fw-bold border-none fs-primary"
                            type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapseOne"
                            aria-expanded="true"
                            aria-controls="panelsStayOpen-collapseOne">
                            Why should I distribute my game on the Epic Games Store?
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseOne"
                        class="accordion-collapse collapse show">
                        <div class="accordion-body">
                            The Epic Games Store has a global audience of over
                            230M+ users, a 88%/12% revenue split and additional
                            no-cost services to help bring your game to market.
                            For games built on Unreal Engine, engine royalty
                            fees are waived for in-store purchases using Epic's
                            payment processor. In-app purchases and products
                            using their own payment processor are not exempt
                            from engine royalties. </div>
                    </div>
                </div>
                <div class="accordion-item fs-primary bg-dark text-light">
                    <h2 class="accordion-header">
                        <button
                            class="accordion-button accordion-button-hover-primary bg-dark text-light fw-bold border-none fs-primary  collapsed"
                            type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapseTwo"
                            aria-expanded="false"
                            aria-controls="panelsStayOpen-collapseTwo">
                            My game is built with Unity or another engine, can I
                            bring it to the Epic Games store?
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseTwo"
                        class="accordion-collapse collapse">
                        <div class="accordion-body">
                            Yes, the Epic Games store is engine-agnostic.
                            Epic is aiming to bring great games to players,
                            regardless of your engine choice.
                        </div>
                    </div>
                </div>
                <div class="accordion-item fs-primary bg-dark text-light">
                    <h2 class="accordion-header">
                        <button
                            class="accordion-button accordion-button-hover-primary bg-dark text-light fw-bold border-none fs-primary  collapsed"
                            type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapseThree"
                            aria-expanded="false"
                            aria-controls="panelsStayOpen-collapseThree">
                            What are the Epic Games Store self-service publishing
                            tools?
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseThree"
                        class="accordion-collapse collapse">
                        <div class="accordion-body">
                            They are a suite of tools within the Epic Developer
                            Portal used by developers to set up their game pages,
                            pricing, offers, builds, and updates on the Epic Games
                            Store.
                        </div>
                    </div>
                </div>
                <div class="accordion-item fs-primary bg-dark text-light">
                    <h2 class="accordion-header">
                        <button
                            class="accordion-button accordion-button-hover-primary bg-dark text-light fw-bold border-none fs-primary  collapsed"
                            type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapseFour"
                            aria-expanded="false"
                            aria-controls="panelsStayOpen-collapseFour">
                            What is the Epic Developer Portal?
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseFour"
                        class="accordion-collapse collapse">
                        <div class="accordion-body">
                            The Developer Portal is the central hub to distribute
                            games on the Epic Games Store and enhance games with
                            Epic Online Services. The Developer Portal is used to
                            update product information, configure back-end services,
                            support players, and view game financial data, usage
                            reports, and other statistical data. Learn more by
                            reading the Developer Portal documentation.
                        </div>
                    </div>
                </div>
                <div class="accordion-item fs-primary bg-dark text-light">
                    <h2 class="accordion-header">
                        <button
                            class="accordion-button accordion-button-hover-primary bg-dark text-light fw-bold border-none fs-primary  collapsed"
                            type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapseFive"
                            aria-expanded="false"
                            aria-controls="panelsStayOpen-collapseFive">
                            What other developer tools does Epic offer?
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseFive"
                        class="accordion-collapse collapse">
                        <div class="accordion-body">
                            "Epic offers an ecosystem of tools, services, and
                            communities to help anyone create, power, and distribute
                            software. With a single Epic Games account, anyone can
                            create with Unreal Engine, enhance with Epic Online
                            Services and Kids Web Services, and distribute PC games
                            on the Epic Games Store. Even more tools like
                            Twinmotion, MetaHuman, Quixel, and Capturing Reality
                            bring your project to the next level. And the Epic
                            Developer Community is here to connect creators alike to
                            share and learn. Learn more about Epic's ecosystem of
                            tools, services, and communities.
                        </div>
                    </div>
                </div>
                <div class="accordion-item fs-primary bg-dark text-light">
                    <h2 class="accordion-header">
                        <button
                            class="accordion-button accordion-button-hover-primary bg-dark text-light fw-bold border-none fs-primary  collapsed"
                            type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapseSix"
                            aria-expanded="false"
                            aria-controls="panelsStayOpen-collapseSix">
                            How do I distribute games on the Epic Games Store?
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseSix"
                        class="accordion-collapse collapse">
                        <div class="accordion-body">
                            Getting started is easy, just log in or create an
                            account at dev.epicgames.com/portal. From there the sign
                            up wizard will help guide registration of your company
                            and the build of your first game. Be sure to have
                            business information (contact info and tax/payout
                            information) on hand. Important to note there is a
                            recoupable $100 USD submission fee per game which will
                            need to paid before releasing on the store. Read our
                            announcement blog for an overview of the self-publishing
                            process.
                        </div>
                    </div>
                </div>
                <div class="accordion-item fs-primary bg-dark text-light">
                    <h2 class="accordion-header">
                        <button
                            class="accordion-button accordion-button-hover-primary bg-dark text-light fw-bold border-none fs-primary  collapsed"
                            type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapseSeven"
                            aria-expanded="false"
                            aria-controls="panelsStayOpen-collapseSeven">
                            Are there any requirements for a game to launch on the
                            Store?
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseSeven"
                        class="accordion-collapse collapse">
                        <div class="accordion-body">
                            All products published on the Epic Games Store adhere to
                            our content guidelines. In addition, they must launch,
                            run, and be consistent with the product description
                            presented to users via their Product Details Page (PDP).
                            Multiplayer games must support crossplay across all PC
                            stores. This is to make sure players who purchase a
                            multiplayer game on any store can easily connect with
                            other players, regardless of where the game was
                            purchased. To achieve this, you can implement crossplay
                            yourself, use a third-party SDK, or use Epic Online
                            Services for free.
                            Achievements - All games onboarded to the Epic Games
                            Store publishing tools after March 9, 2023 are required
                            to enable Epic Games Store achievements if the game has
                            achievements on other PC stores. This helps standardize
                            the player experience regardless of where the game was
                            purchased.
                            Visit the Epic Games Store Requirements documentation
                            for more information.
                        </div>
                    </div>
                </div>
                <div class="accordion-item fs-primary bg-dark text-light">
                    <h2 class="accordion-header">
                        <button
                            class="accordion-button accordion-button-hover-primary bg-dark text-light fw-bold border-none fs-primary  collapsed"
                            type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapseEight"
                            aria-expanded="false"
                            aria-controls="panelsStayOpen-collapseEight">
                            Any prohibited content that the Store may decline?
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseEight"
                        class="accordion-collapse collapse">
                        <div class="accordion-body">
                            Products that contain prohibited content (hateful or
                            discriminatory content, pornography, and illegal
                            content) are not eligible for distribution on the Epic
                            Games Store. Content that infringes on intellectual
                            property you do not own or have rights to use scams,
                            frauds, or deceptive practices, such as fake games or
                            malware are also prohibited. Published products
                            receiving complaints about content that does not meet
                            the criteria may be subject to re-review and removal
                            from the Epic Games Store. Visit the Epic Games Store
                            Ratings & Content Guidelines documentation for more
                            information.
                        </div>
                    </div>
                </div>

                <div class="accordion-item fs-primary bg-dark text-light">
                    <h2 class="accordion-header">
                        <button
                            class="accordion-button accordion-button-hover-primary bg-dark text-light fw-bold border-none fs-primary  collapsed"
                            type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapseNine"
                            aria-expanded="false"
                            aria-controls="panelsStayOpen-collapseNine">
                            Does the Epic Games store have regional pricing?
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseNine"
                        class="accordion-collapse collapse">
                        <div class="accordion-body">
                            Yes, we do support regional pricing. We also have a set
                            of suggested regional discounts based on local norms.
                        </div>
                    </div>
                </div>
                <div class="accordion-item fs-primary bg-dark text-light">
                    <h2 class="accordion-header">
                        <button
                            class="accordion-button accordion-button-hover-primary bg-dark text-light fw-bold border-none fs-primary  collapsed"
                            type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapseTen"
                            aria-expanded="false"
                            aria-controls="panelsStayOpen-collapseTen">
                            How do refunds work on the Epic Games store?
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseTen"
                        class="accordion-collapse collapse">
                        <div class="accordion-body">
                            Games and products purchased through the Epic Games
                            Store are generally eligible for a refund. These
                            products are marked “refundable”. If a game or product
                            is marked as "non-refundable", then it is not eligible
                            for a refund. Products that include virtual currency or
                            other consumables are marked “non-refundable” and are
                            not eligible for refund. Also, most in-app purchases are
                            non-refundable. Epic cannot provide refunds for
                            purchases made outside of the Epic Games Store. Visit
                            the Epic Games Store Refund Policy for more information.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
