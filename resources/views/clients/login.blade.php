<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login | Game Store</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    {{-- CSS --}}
    <link href="{{ asset('/css/global.css') }}" rel="stylesheet" />
    <link href="{{ asset('/css/clients/app.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/form.css') }}">
</head>

<body>
    <section class="bg-gradient vh-100 d-flex align-items-center">
        <div class="mx-auto text-center login-form-wrapper p-5">
            <div class="display-3 fw-bold text-light py-3 my-3 text-nowrap">Game Store</div>
            <div
                class="bg-blur d-flex flex-column border-primary justify-content-around flex-grow-1 rounded-5 shadow-sm">
                <div class="display-4 fw-bold mt-3 text-light">
                    Login
                </div>
                <div class="w-90 border-primary mx-auto login_form">
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <input spellcheck="false" class="d-block form-control login-form_input" type="text"
                            placeholder="Email or phone number">
                        <input spellcheck="false" class="d-block form-control login-form_input" type="password"
                            placeholder="Password">
                        <button class="btn btn-outline-light btn-lg login_btn fw-bold">Log in</button>
                        <div>
                            <a class="text-light fw-bold" href="">Forgot your password?</a>
                            <a class="text-light fw-bold" href="{{ route('clients.register') }}">Register</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
