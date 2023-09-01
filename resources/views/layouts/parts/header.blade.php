<div class="container-fluid bg-dark text-white">
    <nav class="subnav d-flex align-items-center overflow-hidden">
        <div class="container-fluid d-flex justify-content-between align-items-center">
            <div class="brand_img">
                <img class="img-fluid" src="{{ asset('/logo.svg') }}" alt="logo-img">
            </div>
            <div class="flex-grow-1 web_options">
                <a href="#" class="text-uppercase text-light active nav_options">store</a>
                <a href="#" class="text-uppercase text-light nav_options">distribution</a>
                <a href="#" class="text-uppercase text-light nav_options">game</a>
            </div>
            <div class="nav_controls d-flex">
                @guest
                    <a href="{{ route('login') }}" class="text-light nav_options me-2"><i
                            class="fa-solid fa-right-to-bracket me-2"></i>
                        Login</a>
                    <a href="{{ route('register') }}" class="text-light nav_options">Register</a>
                @else
                    <a href="{{ route('cart.orders') }}" class="text-light nav_options">My
                        Order</a>
                    <a href="{{ route('cart.index') }}" class="text-light nav_options">Cart</a>
                    <form action="{{ route('logout') }}" id="logout" method="POST">
                        <a role="button" class="text-light nav_options"
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
            <div class="wrapper_headnav py-5 d-flex justify-content-start align-items-center">
                <div class="form-group headnav_search">
                    <span><i class="fa-solid fa-magnifying-glass"></i></span>
                    <input type="text" name="search" placeholder="Search store" />
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $('#searchGame').keyup(function() {
            var query = $(this).val();
            if (query != '') {

                $.ajax({
                    url: `{{ route('search') }}?key=` + query,
                    method: "GET",
                    success: function(data) {

                        console.log(data);
                    }
                });
            }
        });
    });
</script>
