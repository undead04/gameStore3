@extends('clients.login')
@section('content')
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <input spellcheck="false"
            class="d-block form-control login-form_input @error('email') is-invalid @enderror"
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
            class="form-control d-block login-form_input @error('password') is-invalid @enderror"
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
    </form>
@endsection
