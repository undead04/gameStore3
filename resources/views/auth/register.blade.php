@extends('clients.login')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/form.css') }}">
    <section class="bg-dark py-5 h-100 d-flex align-items-center">
        <div class="container-md">
            <div class="row justify-content-around">
                <div class="col-md-7">
                    <a href="{{ route('clients.home') }}"
                        class="rounded-circle overflow-hidden side_circle_avatar mx-auto mx-md-0 mb-4">
                        <img src="form.svg" alt="gameStore" class="img-fluid">
                    </a>
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
                                <div class="input-group">
                                    <label class="input-group__label"
                                        for="password">username</label>
                                    <input autocomplete="off" spellcheck="false"
                                        id="name" type="text"
                                        class="input-group__input @error('name') is-invalid @enderror"
                                        name="name" value="{{ old('name') }}"
                                        required autocomplete="name" autofocus
                                        placeholder="Exp: abcxyz">
                                    @error('name')
                                        <span class="text-end invalid-feedback"
                                            role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                {{-- <input autocomplete="off" spellcheck="false"
                                    id="name" type="text"
                                    class="form-control @error('name') is-invalid @enderror d-block login-form_input"
                                    name="name" value="{{ old('name') }}"
                                    required autocomplete="name" autofocus
                                    placeholder="Username"> --}}
                                {{-- @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror --}}
                                <div class="input-group">
                                    <label class="input-group__label"
                                        for="password">email</label>
                                    <input autocomplete="off" spellcheck="false"
                                        id="email" type="email"
                                        class="input-group__input @error('email') is-invalid @enderror"
                                        name="email" value="{{ old('email') }}"
                                        required autocomplete="email"
                                        placeholder="Exp: Example@gmail.com">
                                    @error('email')
                                        <span class="text-end invalid-feedback"
                                            role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                {{-- <input autocomplete="off" spellcheck="false"
                                    id="email" type="email"
                                    class="form-control @error('email') is-invalid @enderror d-block login-form_input"
                                    name="email" value="{{ old('email') }}"
                                    required autocomplete="email"
                                    placeholder="Email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror --}}

                                <div class="input-group">
                                    <label class="input-group__label"
                                        for="password">password</label>
                                    <input autocomplete="off" spellcheck="false"
                                        id="password" type="password"
                                        class="input-group__input @error('password') is-invalid @enderror"
                                        name="password" required
                                        autocomplete="new-password"
                                        placeholder="At least 8 characters">
                                    @error('password')
                                        <span class="text-end invalid-feedback"
                                            role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                {{-- <input autocomplete="off" spellcheck="false"
                                    id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror d-block login-form_input"
                                    name="password" required
                                    autocomplete="new-password"
                                    placeholder="Password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror --}}
                                <div class="input-group">
                                    <label class="input-group__label"
                                        for="password">confirm password</label>
                                    <input autocomplete="off" id="password-confirm"
                                        type="password"
                                        class="input-group__input d-block"
                                        name="password_confirmation" required
                                        autocomplete="new-password" placeholder="">
                                </div>
                                {{-- <input autocomplete="off" id="password-confirm"
                                    type="password"
                                    class="form-control d-block login-form_input"
                                    name="password_confirmation" required
                                    autocomplete="new-password"
                                    placeholder="Comfirm password"> --}}

                                <hr>
                                <button type="submit" class="login_btn"
                                    style="--clr:#0FF0FC">
                                    <span>Register</span>
                                    <i></i>
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
