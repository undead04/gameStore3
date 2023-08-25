<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    {{-- Icon embedding --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- Bootstrap embedding --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">

    {{-- CSS --}}
    <link href="{{ asset('/css/global.css') }}" rel="stylesheet" />
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet" />
</head>

<body>
    {{-- Header  --}}
    <div class="container-fluid bg-black text-white head">
        <nav class="subnav d-flex align-items-center">
            <div class="container-md d-flex justify-content-between">
                <div class="welcome">
                    <span class="fw-bold subnav_label">WELCOME TO GAME WORLD</span>
                </div>
                <div class="subnav_controls d-flex">
                    <div class="control-item">
                        <span class="fw-bolder">CURRENCY</span>
                        <a class="d-inline-block mx-1" href="">EUR</a>
                        <a class="d-inline-block mx-1" href="">USD</a>
                        <a class="d-inline-block mx-1" href="">GBP</a>
                    </div>
                    <div class="control-item">
                        <a class="text-white fw-bolder" href="">LOGIN</a>
                        <span class="d-inline-block mx-2">OR</span>
                        <a class="text-white fw-bolder" href="">REGISTER</a>
                    </div>
                    <div class="control-item">
                        <a class="text-white fw-bolder" href="">MY CART</a>
                        <span>0 ITEMS</span>
                    </div>
                </div>
            </div>
        </nav>
        <div class="headnav">
            <div class="container-md">
                <div class="wrapper_headnav py-5 d-flex justify-content-between">
                    <div class="headnav_logo">
                        <img class="img-fluid"
                            src="https://cs-gameworld.myshopify.com/cdn/shop/t/5/assets/logo.png?v=96312829134779964061629426595"
                            alt="logo-img">
                    </div>
                    <div class="headnav_services d-flex flex-column justify-content-center">
                        <div class="haednav_contacts fw-bold">
                            <span class="text-info">CUSTOMER SUPPORT</span>
                            <span>1800-000-GAMEWORLD</span>
                            <span>CHAT WITH US</span>
                        </div>
                        <div class="form-group headnav_search">
                            <input type="text" placeholder="Search entire store here">
                            <span><i class="fa-solid fa-magnifying-glass"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    {{-- Header --}}
    {{-- Content --}}

    @yield('content')
    {{-- Content --}}

    {{-- Footer --}}
    <footer class="bg-dark">
        <div class="container py-3">
            <div class="footer_wrapper position-relative">
                <div class="d-flex justify-content-between">
                    <div>
                        <a class="text-light contact_link" href=""><i class="fa-brands fa-facebook"></i></a>
                        <a class="text-light contact_link" href=""><i class="fa-brands fa-twitter"></i></a>
                        <a class="text-light contact_link" href=""><i class="fa-brands fa-youtube"></i></a>
                    </div>
                    <div>
                        <div
                            class="d-flex justify-content-center align-items-center btn btn-sm btn-outline-secondary rounded-2 goup_btn">
                            <i class="fa-solid fa-chevron-up"></i>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="text-secondary lead">Resources</div>
                        <div class="row">
                            <div class="col-md-4">
                                <div><a class="text-white footer_link" href="">Support-A-Creator</a></div>
                                <div><a class="text-white footer_link" href="">Distribute on Epic Games</a></div>
                                <div><a class="text-white footer_link" href="">Careers</a></div>
                                <div><a class="text-white footer_link" href="">Company</a></div>
                            </div>
                            <div class="col-md-4">
                                <div><a class="text-white footer_link" href="">Fan Art Policy</a></div>
                                <div><a class="text-white footer_link" href="">UX Research</a></div>
                                <div><a class="text-white footer_link" href="">Store EULA</a></div>
                            </div>
                            <div class="col-md-4">
                                <div><a class="text-white footer_link" href="">Online Services</a></div>
                                <div><a class="text-white footer_link" href="">Community Rules</a></div>
                                <div><a class="text-white footer_link" href="">Epic Newsroom</a></div>
                            </div>
                        </div>
                        <div class="text-secondary lead">Made By Epic Games</div>
                        <div class="row">
                            <div class="col-md-4">
                                <div><a class="text-white footer_link" href="">Battle Breakers</a></div>
                                <div><a class="text-white footer_link" href="">Fornite</a></div>
                                <div><a class="text-white footer_link" href="">Infinity blade</a></div>
                            </div>
                            <div class="col-md-4">
                                <div><a class="text-white footer_link" href="">Robo Recall</a></div>
                                <div><a class="text-white footer_link" href="">Shadow Complex</a></div>
                                <div><a class="text-white footer_link" href="">Unreal Tournament</a></div>
                            </div>
                        </div>
                        <hr>
                        <div class="footer_copyright">
                            © 2023, Epic Games, Inc. All rights reserved. Epic, Epic Games, the Epic Games logo,
                            Fortnite,
                            the
                            Fortnite logo, Unreal, Unreal Engine, the Unreal Engine logo, Unreal Tournament, and the
                            Unreal
                            Tournament logo are trademarks or registered trademarks of Epic Games, Inc. in the United
                            States
                            of
                            America and elsewhere. Other brands or product names are the trademarks of their respective
                            owners.
                        </div>

                        <div>
                            <span><a class="text-light" href="">Terms of Service</a></span>
                            <span><a class="text-light" href="">Privacy policy</a></span>
                            <span><a class="text-light" href="">Store refund policy</a></span>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </footer>
    {{-- Footer --}}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
