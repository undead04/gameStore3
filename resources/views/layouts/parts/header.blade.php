<header class="position-sticky sticky-top">
    <div class="container-fluid bg-dark text-white">
        <nav class="subnav d-flex align-items-center overflow-hidden">
            <div
                class="container-fluid d-flex justify-content-between align-items-center">
                <a href="{{ route('clients.home') }}" class="brand_img">
                    <img class="img-fluid" src="{{ asset('/logo.svg') }}"
                        alt="logo-img">
                </a>
                <div class="flex-grow-1 web_options">
                    <a href="{{ route('clients.home') }}"
                        class="text-uppercase text-light nav_options">store</a>
                    <a href="#"
                        class="text-uppercase text-light nav_options">distribution</a>
                    <a href="{{ route('clients.games') }}"
                        class="text-uppercase text-light nav_options">game</a>
                </div>
                <div class="nav_controls d-flex">
                    @guest
                        <a href="{{ route('login') }}"
                            class="text-light nav_options me-2"><i
                                class="fa-solid fa-right-to-bracket me-2"></i>
                            Login</a>
                        <a href="{{ route('register') }}"
                            class="text-light nav_options">Register</a>
                    @else
                        <a href="{{ route('cart.index') }}"
                            class="text-light nav_options">
                            <span><i class="fa-solid fa-cart-shopping"></i>
                                Cart</span></a>
                        <a href="{{ route('cart.orders') }}"
                            class="text-light nav_options">
                            <span><i class="fa-solid fa-wallet"></i>
                                Orders</span></a>
                        <form action="{{ route('logout') }}" id="logout"
                            method="POST">
                            <a role="button"
                                class="text-light nav_options bg-primary"
                                onclick="document.getElementById('logout').submit()">
                                Logout
                            </a>
                            @csrf
                        </form>
                    @endguest

                </div>
            </div>
        </nav>
    </div>
    <div class="container-fluid bg-black text-white">
        <div class="headnav">
            <div class="container-md">
                <div
                    class="wrapper_headnav py-5 d-flex justify-content-start align-items-center">
                    <div class="search_area">
                        <div class="form-group headnav_search">
                            <span><i
                                    class="fa-solid fa-magnifying-glass"></i></span>
                            <input type="text" id="searchGame"
                                name="gameName" placeholder="Search store" />
                        </div>
                        <div class="search_results bottom-0 left-0 right-0">
                            <div id="ListGames"></div>
                        </div>
                    </div>

                    <div class="ms-3">
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
            if (query != '') {
                $.ajax({
                    url: `{{ route('search') }}?key=` +
                        query,

                    method: "GET",
                    success: function(data) {
                        $('#ListGames').show(
                            300000);
                        $('#ListGames').html(data);
                    }

                });
            } else {
                $('#ListGames').html('');
                $('#listGames').hide();
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
