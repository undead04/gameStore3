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
                    <a href="{{ route('cart.index') }}">Cart</a>
                </div>
                @guest
                    <a href="{{ route('login') }}" class="nav-link active me-2">Login</a>
                    <a href="{{ route('register') }}" class="nav-link active">Register</a>
                @else
                    <a href="{{ route('cart.orders') }}" class="nav-link active me-2">My Order</a>
                    <form action="{{ route('logout') }}" id="logout" method="POST">
                        <a role="button" class="nav-link active" onclick="document.getElementById('logout').submit()">
                            Logout
                        </a>
                        @csrf
                    </form>
                @endguest

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
                        <input type="text" placeholder="Search entire store here" id="searchGame" name="gameName">
                        <span><i class="fa-solid fa-magnifying-glass"></i></span>

                    </div>

                    <div id="Games"></div>
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
