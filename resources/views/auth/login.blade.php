@extends('layouts.client')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/form.css') }}">
    <section class="bg-dark py-5">
        <div class="container-md">
            <div class="row justify-content-around">
                <div class="col-md-7">
                    <div class="rounded-circle overflow-hidden side_circle_avatar">
                        <img src="form.svg" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-5 d-flex flex-column justify-content-center">
                    <div
                        class="text-light text-center fw-bold mb-5 display-3 form_title">
                        LOGIN
                    </div>
                    <div class="form_wrapper">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <input spellcheck="false"
                                class="d-block form-control login-form_input border-primary @error('email') is-invalid @enderror"
                                type="text" placeholder="Email" id="email"
                                type="email" name="email"
                                value="{{ old('email') }}" required
                                autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                            <input id="password" type="password"
                                class="form-control d-block login-form_input border-primary @error('password') is-invalid @enderror"
                                name="password" required
                                autocomplete="current-password"
                                placeholder="Password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                            <div class="d-flex my-3 remember_check">
                                <input class="form-check-input" type="checkbox"
                                    name="remember" id="remember"
                                    {{ old('remember') ? 'checked' : '' }}>

                                <label class="ms-2 text-white" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                            <hr>
                            <button
                                class="btn btn-primary btn-lg login_btn fw-bold">
                                Login</button>
                            <div class="mt-5 request_text_login">
                                <a class="text-light fw-bold"
                                    href="{{ route('password.request') }}">Forgot
                                    your password?</a>
                                <a class="text-light fw-bold"
                                    href="{{ route('register') }}">Register</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection




{{-- <form method="POST" action="{{ route('login') }}">
    @csrf

    <input spellcheck="false"
        class="d-block form-control login-form_input border-primary @error('email') is-invalid @enderror"
        type="text" placeholder="Email" id="email"
        type="email" name="email"
        value="{{ old('email') }}" required
        autocomplete="email" autofocus>

    @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror

    <input id="password" type="password"
        class="form-control d-block login-form_input border-primary @error('password') is-invalid @enderror"
        name="password" required
        autocomplete="current-password"
        placeholder="Password">

    @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror

    <div class="d-flex my-2">
        <input class="form-check-input" type="checkbox"
            name="remember" id="remember"
            {{ old('remember') ? 'checked' : '' }}>

        <label class="ms-2 text-white fs-6 fw-bold"
            for="remember">
            {{ __('Remember Me') }}
        </label>
    </div>
    <hr>
    <button
        class="btn btn-light btn-lg login_btn fw-bold w-100 mx-0">
        Log in</button>
    <div class="mt-2">
        <a class="text-light fw-bold"
            href="{{ route('password.request') }}">Forgot
            your password?</a>
        <a class="text-light fw-bold"
            href="{{ route('register') }}">Register</a>
    </div>
</form> --}}
