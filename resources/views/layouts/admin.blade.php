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
    <link rel="icon" href="/logo_min.ico" type="image/x-icon"/>
    {{-- CSS --}}
    <link href="{{ asset('/css/global.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('/css/form.css') }}">
    <link href="{{ asset('/css/admin/admin.css') }}" rel="stylesheet" />
</head>

<body>


    <section class="admin_area">

        <nav class="navbar navbar-expand-lg bg-info text-light">
            <div class="container-fluid">
                <button class="btn btn-info text-light btn_admin admin_nav_item" type="button" type="button"
                    data-bs-toggle="offcanvas" data-bs-target="#adminSidebar" aria-controls="adminSidebar">
                    <i class="fa-solid fa-bars"></i>
                </button>
                {{-- class="btn btn-primary" >
                Button with data-bs-target --}}
                <div class="text-center">
                    <span class="display-4">Mouse - Admin page</span>
                </div>
                <div class="text-light admin_nav_item">
                    <div class="admin_avatar">
                        AD
                    </div>
                </div>

            </div>
        </nav>
    </section>
    <section class="">
        <div class="offcanvas offcanvas-start admin_sidebar" tabindex="-1" id="adminSidebar">
            <div class="w-100">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title display-3" id="offcanvasExampleLabel">Mouse - Menu
                        </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                @include('admin.parts.sidebar')
            </div>
        </div>
    </section>
    <section class="py-5 bg-info-subtle min-vh-100">
        <div class="container-md">
            <div class="row">
                <div class="admin_table col">
                    @yield('table')
                </div>
            </div>
        </div>
    </section>
    @yield('script')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
