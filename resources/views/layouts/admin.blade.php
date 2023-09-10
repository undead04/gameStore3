<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin - Game Store</title>
    {{-- Icon embedding --}}
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- Bootstrap embedding --}}
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">

    {{-- CSS --}}
    <link href="{{ asset('/css/global.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('/css/form.css') }}">
    <link href="{{ asset('/css/admin/admin.css') }}" rel="stylesheet" />
</head>

<body>

    {{-- <form action="{{ route('logout') }}"
                                    id="logout" method="POST">
                                    <a role="button" class="nav-link active "
                                        onclick="document.getElementById('logout').submit()">
                                        Logout
                                    </a>
                                    @csrf
                                </form> --}}
    <section class="admin_area bg-blur h-100">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand fs-3" style="width: 60px" href="/">
                    <img src="{{ '/form.svg' }}" alt="Logo"
                        class="img-fluid" />
                </a>
                <button class="navbar-toggler" type="button"
                    data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-md-end"
                    id="navbarNav">
                    <ul class="navbar-nav">
                        @include('admin.parts.sidebar')
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container-md">
            <div class="admin_table col-auto">
                @yield('table')
            </div>
        </div>
    </section>
    @yield('script')
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js">
    </script>
</body>

</html>
