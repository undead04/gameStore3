@extends('clients.register')

@section('content')
    {{-- <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Register') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password-confirm"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <input spellcheck="false" id="name" type="text"
            class="form-control @error('name') is-invalid @enderror d-block login-form_input" name="name"
            value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Username">
        @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

        <input spellcheck="false" id="email" type="email"
            class="form-control @error('email') is-invalid @enderror d-block login-form_input" name="email"
            value="{{ old('email') }}" required autocomplete="email" placeholder="Email">
        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

        <input spellcheck="false" id="password" type="password"
            class="form-control @error('password') is-invalid @enderror d-block login-form_input" name="password" required
            autocomplete="new-password" placeholder="Password">

        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

        <input id="password-confirm" type="password" class="form-control d-block login-form_input"
            name="password_confirmation" required autocomplete="new-password" placeholder="Comfirm password">
        {{-- <input spellcheck="false" class="d-block form-control login-form_input" type="text"
            placeholder="Email or phone number"> --}}
        {{-- <input spellcheck="false" class="d-block form-control login-form_input" type="password" placeholder="Password"> --}}
        {{-- <div class="d-flex align-items-center mt-2 checkbox_group">
            <input spellcheck="false" class="d-block privacy_checkbox me-2" type="checkbox">
            <label class="text-light" for="">Đồng ý với chính sách của chúng tôi</label>
        </div> --}}
        <button type="submit" class="w-100 mt-5 mx-0 btn btn-outline-light btn-lg login_btn fw-bold">
            {{ __('Register') }}
        </button>
    </form>
    <hr>
    <div class="text-white h2 my-4">Register by:</div>
    <div>
        <div class="d-flex justify-content-around">
            <a href="" class="text-light reg_brand"><i class="fa-brands fa-facebook"></i></a>
            <a href="" class="text-light reg_brand"><i class="fa-brands fa-twitter"></i></a>
            <a href="" class="text-light reg_brand"><i class="fa-brands fa-discord"></i></a>
            <a href="" class="text-light reg_brand"><i class="fa-brands fa-google"></i></a>
            <a href="" class="text-light reg_brand"><i class="fa-brands fa-instagram"></i></a>
        </div>
    </div>
@endsection
