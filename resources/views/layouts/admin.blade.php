<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin - Game Store</title>
    {{-- Icon embedding --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- Bootstrap embedding --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">

    {{-- CSS --}}
    <link href="{{ asset('/css/global.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('/css/form.css') }}">
    <link href="{{ asset('/css/admin.css') }}" rel="stylesheet" />
</head>

<body>
    <section>
        <div class="container-fluid bg-black text-white head">
            <nav class="subnav d-flex align-items-center">
                <div class="container-md d-flex justify-content-between">
                    <div class="welcome">
                        <span class="fw-bold subnav_label">WELCOME TO GAME WORLD</span>
                    </div>
                    <div class="subnav_controls d-flex">
                        <div class="control-item">
                            <a class="text-white fw-bolder" href="">ADMIN</a>
                            <span class="d-inline-block mx-2">-</span>
                            <a class="text-white fw-bolder" href="">LOGOUT</a>
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
                            <div class="headnav_contacts fw-bold">
                                <span class="text-info">ALD TEAM</span>
                                <span>1800-000-GAMEWORLD</span>
                                <span>CHAT WITH US</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <section>
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-3">
                    <div class="admin_options">
                        <div class="options_title">
                            <div class="options_icon"><i class="fa-solid fa-bars"></i></div>
                            <div class="options_label">Menu</div>
                        </div>
                        <a href="{{ route('admin.home') }}" class="options_group">
                            <div class="options_icon"><i class="fa-solid fa-house-chimney"></i></div>
                            <div class="options_lable">Home</div>
                        </a>
                        <a href="{{ route('admin.game.games') }}" class="options_group">
                            <div class="options_icon"><i class="fa-solid fa-gamepad"></i></div>
                            <div class="options_lable">Games</div>
                        </a>
                        <div class="options_group">
                            <div class="options_icon"><i class="fa-solid fa-user"></i></div>
                            <div class="options_lable">Users</div>
                        </div>
                        <div class="options_group">
                            <div class="options_icon"><i class="fa-solid fa-coins"></i></div>
                            <div class="options_lable">Benefit</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="admin_table"> @yield('table')</div>
                </div>

            </div>
        </div>
    </section>
</body>

</html>
