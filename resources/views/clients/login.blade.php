<!DOCTYPE html>
<html lang="en" style="height: 100%">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login | Game Store</title>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    {{-- CSS --}}
    <link href="{{ asset('/css/global.css') }}" rel="stylesheet" />
    <link href="{{ asset('/css/clients/app.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/form.css') }}">
</head>

<body style="height: 100%">

    @yield('content')
    {{-- @include('layouts.parts.footer') --}}


</body>

</html>
