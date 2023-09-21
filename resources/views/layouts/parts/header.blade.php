<header class="fixed-top sticky-top">
    <div class="container-fluid bg-dark text-white d-none d-md-block">
        <nav class="subnav d-flex align-items-center">
            <div class="container-fluid d-flex justify-content-between align-items-center">

                <div class="d-none d-md-flex flex-grow-1 web_options overflow-hidden">
                    <a href="{{ route('clients.home') }}" class="brand_img">
                        <img class="img-fluid" src="{{ asset('/logo.svg') }}" alt="logo-img">
                    </a>
                    <a href="{{ route('clients.home') }}" class="text-uppercase text-light nav_options">store</a>
                    <a href="{{ route('clients.distribution') }}"
                        class="text-uppercase text-light nav_options">distribution</a>
                    <a href="{{ route('clients.games') }}" class="text-uppercase text-light nav_options">game</a>
                </div>
                <div class="nav_controls d-none d-md-flex">
                    @guest
                        <a href="{{ route('login') }}" class="text-light nav_options me-2"><i
                                class="fa-solid fa-right-to-bracket me-2"></i>
                            Login</a>
                        <a href="{{ route('register') }}" class="text-light nav_options">Register</a>
                    @else
                        <div id="dropdown" class="dropdown d-flex align-items-center">
                            <button type="button" class="dropdown-toggle btn btn-dark h-100 fs-4" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <i class="fa-solid fa-user"></i>
                                <span class="ms-1">{{ auth()->user()->getName() }}</span>
                            </button>

                            <ul class="dropdown-menu dropdown-menu-dark user_options position-absolute left-0 right-0">
                                <li>
                                    <a href="{{ route('cart.index') }}" class="text-light">
                                        <span><i class="fa-solid fa-cart-shopping"></i>
                                            Cart</span>
                                        <div class="badge bg-light py-2 px-3 rounded-2 text-dark ms-2">
                                            @if (session()->get('cart'))
                                                {{ count(session()->get('cart')) }}
                                            @else
                                                0
                                            @endif

                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('cart.orders') }}" class="text-light">
                                        <span><i class="fa-solid fa-wallet"></i>
                                            Orders</span>
                                    </a>
                                </li>
                                <li>
                                    <form action="{{ route('logout') }}" id="logout" method="POST">
                                        <a role="button" class="text-light"
                                            onclick="document.getElementById('logout').submit()">
                                            <span>
                                                <i class="fa-solid fa-right-from-bracket"></i>
                                                <span>Logout</span>
                                            </span>
                                        </a>
                                        @csrf
                                    </form>
                                </li>
                            </ul>

                        </div>
                    @endguest

                </div>
                <div class="d-block d-md-none" style="width: 40px;"></div>

                <div class="d-block d-md-none">
                    <a href="{{ route('clients.home') }}" class="brand_img">
                        <img class="img-fluid" src="{{ asset('/logo.svg') }}" alt="logo-img">
                    </a>
                </div>

                {{-- <button
                    class="btn btn-dark text-light fs-primary d-block d-md-none"
                    type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#navOffCanvas" aria-controls="navOffCanvas">
                    <i class="fa-solid fa-bars"></i>
                </button> --}}
            </div>
        </nav>
    </div>
    <div class="offcanvas offcanvas-start text-bg-dark" tabindex="-1" id="navOffCanvas"
        aria-labelledby="navOffCanvasLabel">
        <div class="offcanvas-header" style="height: 50px">
            @guest
                <div></div>
            @else
                <div>
                    <span class="fs-big">{{ auth()->user()->getName() }}</span>
                </div>
            @endguest
            <button type="button" class="btn-close bg-light" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="offcanvas-item">
                <a href="{{ route('clients.home') }}" class="text-capitalize offcanvas-link text-light">store</a>
            </div>
            <div class="offcanvas-item">
                <a href="{{ route('clients.distribution') }}"
                    class="text-capitalize offcanvas-link text-light">distribution</a>
            </div>
            <div class="offcanvas-item">
                <a href="{{ route('clients.games') }}" class="text-capitalize offcanvas-link text-light">game</a>
            </div>
            @guest
                <div class="offcanvas-item">
                    <a href="{{ route('login') }}" class="btn btn-secondary text-capitalize offcanvas-link text-light">
                        Login</a>
                </div>
                <div class="offcanvas-item">
                    <a href="{{ route('register') }}"
                        class="btn btn-danger text-capitalize offcanvas-link text-light">Register</a>
                </div>
            @else
                <div class="offcanvas-item">
                    <a href="{{ route('cart.index') }}" class="text-capitalize offcanvas-link text-light">
                        <span><i class="fa-solid fa-cart-shopping"></i>
                            Cart</span></a>
                </div>
                <div class="offcanvas-item">
                    <a href="{{ route('cart.orders') }}" class="text-capitalize offcanvas-link text-light">
                        <span><i class="fa-solid fa-wallet"></i>
                            Orders</span></a>
                </div>
                <div class="offcanvas-item">
                    <form class="flex-grow-1" action="{{ route('logout') }}" id="logout" method="POST">
                        <a role="button" class="text-capitalize offcanvas-link text-light"
                            onclick="document.getElementById('logout').submit()">
                            <span class="d-flex justify-content-between"><span>Logout
                                    <i class="fa-solid fa-right-from-bracket"></i></span></span>

                        </a>
                        @csrf
                    </form>
                </div>
            @endguest
        </div>
    </div>
    <div class="container-fluid bg-black text-white">
        <div class="headnav">
            <div class="container-md">
                <div class="wrapper_headnav d-flex d-inline-flex justify-content-between my-4 my-md-5">
                    <div>
                        <button class="btn btn-outline-secondary text-light display-2 fs-4 d-block d-md-none"
                            type="button" data-bs-toggle="offcanvas" data-bs-target="#navOffCanvas"
                            aria-controls="navOffCanvas">
                            <i class="fa-solid fa-bars"></i>
                        </button>
                    </div>
                    <div class="search_area headnav_item">
                        <div class="form-group headnav_search">
                            <span><i class="fa-solid fa-magnifying-glass"></i></span>
                            <input autocomplete="off" type="search" id="searchGame" name="gameName"
                                placeholder="Search store" />
                        </div>
                        <div class="search_results row">
                            <div id="ListGames" class="col-12"></div>
                        </div>
                    </div>

                    {{-- <div class="ms-3 headnav_item d-none d-md-inline-flex">
                        <a href="#"
                            class="d-inline-block nav-menu_item active h3 bg-transparent text-capitalize d-inline-block me-3">
                            Discover</a>
                        <a href="{{ route('clients.games') }}"
                            class="d-inline-block nav-menu_item h3 bg-transparent text-capitalize d-inline-block me-3">
                            Browse</a>
                    </div>
                    <select
                        class="bg-transparent mobile_headnav_select text-light d-inline-block d-md-none "
                        aria-label="Default select example">
                        <option class="nav-menu_item" value="0" selected>
                            Discover</option>
                        <option class="nav-menu_item" value="1">
                            Browse
                        </option>

                    </select> --}}
                    {{-- <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active"
                                aria-current="page">Home</li>
                        </ol>
                    </nav>

                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a
                                    href="#">Home</a></li>
                            <li class="breadcrumb-item active"
                                aria-current="page">Library</li>
                        </ol>
                    </nav> --}}


                </div>
            </div>
        </div>
    </div>
</header>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    // Query search result
    $(document).ready(function() {
        $('#searchGame').keyup(function() {
            var query = $(this).val();
            console.log(query);
            if (query != '') {
                $.ajax({
                    url: `{{ route('search') }}?key=` +
                        query,

                    method: "GET",
                    success: function(data) {

                        $('#ListGames').html(data);

                    }

                });
            } else {
                $('#ListGames').html('');
            }

        });
    });

    // Active, not active search result
    const searchInput = document.getElementById('searchGame');
    const searchResult = document.querySelector('.search_results')
    searchInput.addEventListener('focus', () => {
        searchResult.classList.add('active')
    });

    searchInput.addEventListener('blur', () => {
        let timeOutID = setTimeout(() => {
            searchResult.classList.remove('active')
            clearTimeout(timeOutID);
        }, 1000);
    });

    const navLinks = document.querySelectorAll(".nav_options");
    const originLinks = (location.href).split('?')[0];
    navLinks.forEach(navLink => {
        //Kiểm tra nếu url = navLink href
        if (originLinks === navLink.href) {
            // Thêm class active cho navLink đó
            navLink.classList.add('active');
        };

    });
</script>
