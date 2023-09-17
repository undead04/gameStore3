@extends('clients.login')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/form.css') }}">
    <section class="bg-dark py-5 h-100 d-flex align-items-center">
        <div class="container-md">
            <div class="row justify-content-around">
                <div class="col-md-7">
                    <a href="{{ route('clients.home') }}"
                        class="user-select-none overflow-hidden side_circle_avatar mx-auto mx-md-0">
                        <img src="form.svg" alt="" class="img-fluid">
                    </a>
                </div>
                <div class="col-md-5 d-flex flex-column justify-content-center">
                    <div
                        class="text-light text-center fw-bold mb-5 display-3 form_title">
                        LOGIN
                    </div>
                    <div class="form_wrapper">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="input-group">
                                <label class="input-group__label"
                                    for="emailLogin">Email</label>
                                <input autocomplete="off" spellcheck="false"
                                    class="input-group__input @error('email') is-invalid @enderror"
                                    type="email" id="email" name="email"
                                    value="{{ old('email') }}" autocomplete="email"
                                    autofocus required />
                                @error('email')
                                    <span class="text-end invalid-feedback mt-2"
                                        role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            {{-- <input autocomplete="off" spellcheck="false"
                                class="d-block form-control login-form_input border-primary @error('email') is-invalid @enderror"
                                type="text" placeholder="Email" id="email"
                                type="email" name="email"
                                value="{{ old('email') }}" required
                                autocomplete="email" autofocus> --}}



                            <div class="input-group">
                                <label class="input-group__label"
                                    for="password">Password</label>
                                <input autocomplete="off" spellcheck="false"
                                    type="password" id="password"
                                    class="input-group__input @error('password') is-invalid @enderror"
                                    required autocomplete="current-password"
                                    name="password" value="{{ old('password') }}"
                                    required />
                                @error('password')
                                    <span class="text-end invalid-feedback"
                                        role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            {{-- <input autocomplete="off" id="password" type="password"
                                class="form-control d-block login-form_input border-primary @error('password') is-invalid @enderror"
                                name="password" required
                                autocomplete="current-password"
                                placeholder="Password"> --}}



                            <div class="d-flex my-3 remember_check">
                                <input autocomplete="off" class="form-check-input"
                                    type="checkbox" name="remember" id="remember"
                                    {{ old('remember') ? 'checked' : '' }}>

                                <label class="ms-2 text-white" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                            <hr>
                            <button class="login_btn" style="--clr:#39FF14">
                                <span>Login</span><i></i></button>
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

    <input autocomplete="off"  spellcheck="false"
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

    <input autocomplete="off"  id="password" type="password"
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
        <input autocomplete="off"  class="form-check-input" type="checkbox"
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
