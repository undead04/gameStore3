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
                <div class="col-md-5">
                    <div
                        class="text-light text-center fw-bold mb-5 display-3 form_title">
                        REGISTER
                    </div>
                    <div class="form_wrapper">
                        <div class="flex-grow-1">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <input spellcheck="false" id="name"
                                    type="text"
                                    class="form-control @error('name') is-invalid @enderror d-block login-form_input"
                                    name="name" value="{{ old('name') }}"
                                    required autocomplete="name" autofocus
                                    placeholder="Username">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <input spellcheck="false" id="email"
                                    type="email"
                                    class="form-control @error('email') is-invalid @enderror d-block login-form_input"
                                    name="email" value="{{ old('email') }}"
                                    required autocomplete="email"
                                    placeholder="Email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <input spellcheck="false" id="password"
                                    type="password"
                                    class="form-control @error('password') is-invalid @enderror d-block login-form_input"
                                    name="password" required
                                    autocomplete="new-password"
                                    placeholder="Password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <input id="password-confirm" type="password"
                                    class="form-control d-block login-form_input"
                                    name="password_confirmation" required
                                    autocomplete="new-password"
                                    placeholder="Comfirm password">

                                <hr>
                                <button type="submit"
                                    class="btn btn-primary btn-lg login_btn fw-bold">
                                    {{ __('Register') }}
                                </button>
                            </form>
                            <hr>
                            <div class="bg-success rounded-2 py-3">
                                <div class="d-flex justify-content-around">
                                    <a href=""
                                        class="text-light reg_brand"><i
                                            class="fa-brands fa-facebook"></i></a>
                                    <a href=""
                                        class="text-light reg_brand"><i
                                            class="fa-brands fa-twitter"></i></a>
                                    <a href=""
                                        class="text-light reg_brand"><i
                                            class="fa-brands fa-discord"></i></a>
                                    <a href=""
                                        class="text-light reg_brand"><i
                                            class="fa-brands fa-google"></i></a>
                                    <a href=""
                                        class="text-light reg_brand"><i
                                            class="fa-brands fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    </section>
@endsection
