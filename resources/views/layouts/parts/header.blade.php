<header class="position-sticky sticky-top">
    <div class="container-fluid bg-dark text-white">
        <nav class="subnav d-flex align-items-center">
            <div
                class="container-fluid d-flex justify-content-between align-items-center">

                <div
                    class="d-none d-md-flex flex-grow-1 web_options overflow-hidden">
                    <a href="{{ route('clients.home') }}" class="brand_img">
                        <img class="img-fluid" src="{{ asset('/logo.svg') }}"
                            alt="logo-img">
                    </a>
                    <a href="{{ route('clients.home') }}"
                        class="text-uppercase text-light nav_options">store</a>
                    <a href="{{ route('clients.distribution') }}"
                        class="text-uppercase text-light nav_options">distribution</a>
                    <a href="{{ route('clients.games') }}"
                        class="text-uppercase text-light nav_options">game</a>
                </div>
                <div class="nav_controls d-none d-md-flex">
                    @guest
                        <a href="{{ route('login') }}"
                            class="text-light nav_options me-2"><i
                                class="fa-solid fa-right-to-bracket me-2"></i>
                            Login</a>
                        <a href="{{ route('register') }}"
                            class="text-light nav_options">Register</a>
                    @else
                        <div id="dropdown"
                            class="dropdown d-flex align-items-center">
                            <button type="button"
                                class="dropdown-toggle btn btn-dark h-100 fs-4"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa-solid fa-user"></i>
                                <span class="ms-1">User</span>
                            </button>

                            <ul
                                class="dropdown-menu dropdown-menu-dark user_options position-absolute left-0 right-0">
                                <li>
                                    <a href="{{ route('cart.index') }}"
                                        class="text-light">
                                        <span><i
                                                class="fa-solid fa-cart-shopping"></i>
                                            Cart</span></a>
                                </li>
                                <li>
                                    <a href="{{ route('cart.orders') }}"
                                        class="text-light">
                                        <span><i class="fa-solid fa-wallet"></i>
                                            Orders</span></a>
                                </li>
                                <li>
                                    <form action="{{ route('logout') }}"
                                        id="logout" method="POST">
                                        <a role="button" class="text-light"
                                            onclick="document.getElementById('logout').submit()">
                                            <span><i
                                                    class="fa-solid fa-right-from-bracket"></i>Logout</span>
                                        </a>
                                        @csrf
                                    </form>
                                </li>
                            </ul>

                        </div>
                    @endguest

                </div>
                <button class="btn btn-secondary d-block d-md-none"
                    type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#navOffCanvas" aria-controls="navOffCanvas">
                    <i class="fa-solid fa-bars"></i>
                </button>
                <div class="offcanvas offcanvas-start text-bg-dark"
                    tabindex="-1" id="navOffCanvas"
                    aria-labelledby="navOffCanvasLabel">
                    <div class="offcanvas-header" style="height: 50px">
                        <a href="{{ route('clients.home') }}"
                            class="brand_img">
                            <h5 class="offcanvas-title text-light w-100 display-3"
                                id="navOffCanvasLabel">
                                <img class="img-fluid"
                                    src="{{ asset('/logo.svg') }}"
                                    alt="logo-img">
                            </h5>
                        </a>
                        <button type="button" class="btn-close bg-light"
                            data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <div class="offcanvas-item">
                            <a href="{{ route('clients.home') }}"
                                class="text-capitalize offcanvas-link text-light">store</a>
                        </div>
                        <div class="offcanvas-item">
                            <a href="#"
                                class="text-capitalize offcanvas-link text-light">distribution</a>
                        </div>
                        <div class="offcanvas-item">
                            <a href="{{ route('clients.games') }}"
                                class="text-capitalize offcanvas-link text-light">game</a>
                        </div>
                        @guest
                            <div class="offcanvas-item">
                                <a href="{{ route('login') }}"
                                    class="btn btn-secondary text-capitalize offcanvas-link text-light">
                                    Login</a>
                            </div>
                            <div class="offcanvas-item">
                                <a href="{{ route('register') }}"
                                    class="btn btn-danger text-capitalize offcanvas-link text-light">Register</a>
                            </div>
                        @else
                            <div class="offcanvas-item">
                                <a href="{{ route('cart.index') }}"
                                    class="text-capitalize offcanvas-link text-light">
                                    <span><i class="fa-solid fa-cart-shopping"></i>
                                        Cart</span></a>
                            </div>
                            <div class="offcanvas-item">
                                <a href="{{ route('cart.orders') }}"
                                    class="text-capitalize offcanvas-link text-light">
                                    <span><i class="fa-solid fa-wallet"></i>
                                        Orders</span></a>
                            </div>
                            <div class="offcanvas-item">
                                <form action="{{ route('logout') }}" id="logout"
                                    method="POST">
                                    <a role="button"
                                        class="text-capitalize offcanvas-link text-light"
                                        onclick="document.getElementById('logout').submit()">
                                        Logout
                                        <i
                                            class="fa-solid fa-right-from-bracket"></i>
                                    </a>
                                    @csrf
                                </form>
                            </div>
                        @endguest
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <div class="container-fluid bg-black text-white">
        <div class="headnav">
            <div class="container-md">
                <div class="wrapper_headnav d-flex d-inline-flex py-2 py-md-5">
                    <div class="search_area headnav_item">
                        <div class="form-group headnav_search">
                            <span><i
                                    class="fa-solid fa-magnifying-glass"></i></span>
                            <input type="search" id="searchGame"
                                name="gameName" placeholder="Search store" />
                        </div>
                        <div class="search_results bottom-0 left-0 right-0">
                            <div id="ListGames"></div>
                        </div>
                    </div>

                    <div class="ms-3 headnav_item d-none d-md-inline-flex">
                        <a href="#"
                            class="d-inline-block nav-menu_item active h3 bg-transparent text-capitalize d-inline-block me-3">
                            Discover</a>
                        <a href="#"
                            class="d-inline-block nav-menu_item h3 bg-transparent text-capitalize d-inline-block me-3">
                            Browse</a>
                        <a href="#"
                            class="d-inline-block nav-menu_item h3 bg-transparent text-capitalize d-inline-block me-3">
                            News</a>
                    </div>
                    <select
                        class="bg-transparent mobile_headnav_select text-light d-inline-block d-md-none "
                        aria-label="Default select example">
                        <option class="nav-menu_item" selected><a
                                href="#"
                                class="d-inline-block nav-menu_item active h3 bg-transparent text-capitalize d-inline-block me-3">
                                Discover</a></option>
                        <option class="nav-menu_item" value="1"><a
                                href="#"
                                class="d-inline-block nav-menu_item h3 bg-transparent text-capitalize d-inline-block me-3">
                                Browse</a>
                        </option>
                        <option class="nav-menu_item" value="2"><a
                                href="#"
                                class="d-inline-block nav-menu_item h3 bg-transparent text-capitalize d-inline-block me-3">
                                News</a>
                        </option>
                    </select>
                </div>
            </div>
        </div>
    </div>
</header>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js">
</script>
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
