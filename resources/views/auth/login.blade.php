@extends('clients.login')
@section('content')
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <input spellcheck="false" class="d-block form-control login-form_input @error('email') is-invalid @enderror"
            type="text" placeholder="Email" id="email" type="email" name="email" value="{{ old('email') }}" required
            autocomplete="email" autofocus>

        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror


        {{-- spellcheck="false" class="d-block form-control login-form_input" type="text"
    placeholder="Email or phone number" --}}


        <input id="password" type="password"
            class="form-control d-block login-form_input @error('password') is-invalid @enderror" name="password" required
            autocomplete="current-password" placeholder="Password">

        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

        <div class="d-flex mt-2">
            <input class="form-check-input" type="checkbox" name="remember" id="remember"
                {{ old('remember') ? 'checked' : '' }}>

            <label class="ms-2 text-white fs-6 fw-bold" for="remember">
                {{ __('Remember Me') }}
            </label>
        </div>
        <button class="btn btn-outline-light btn-lg login_btn fw-bold w-100 mx-0">Log in</button>
        <div>
            <a class="text-light fw-bold" href="{{ route('password.request') }}">Forgot your password?</a>
            <a class="text-light fw-bold" href="{{ route('register') }}">Register</a>
        </div>
    </form>
@endsection



{{-- <section class="bg-gradient vh-100 d-flex align-items-center">
    <div class="mx-auto text-center login-form-wrapper p-5">
        <div class="display-3 fw-bold text-light py-3 my-3 text-nowrap">Game Store</div>
        <div class="bg-blur d-flex flex-column border-primary justify-content-around flex-grow-1 rounded-5 shadow-sm">
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
</section> --}}
