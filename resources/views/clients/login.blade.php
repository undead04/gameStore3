@extends('layouts.client')
@section('title')
@section('form')
    <link href="{{ asset('/css/form.css') }}" rel="stylesheet" />
@endsection
@section('content')
    <section class="bg-dark py-5">
        <div class="text-center mx-auto p-4 rounded-3 login-wrapper">
            <span class="d-block display-4 text-white mb-3 pb-5 fw-bold">Login</span>
            <div class="login_body">
                <form action="" method="POST">
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control login-form_input" id="floatingInput"
                            placeholder="name@example.com">
                        <label for="floatingInput">Email address</label>
                    </div>
                    <hr>
                    <div class="form-floating">
                        <input type="password" class="form-control login-form_input" id="floatingPassword"
                            placeholder="Password">
                        <label for="floatingPassword">Password</label>
                    </div>
                    <div class="w-100 text-end mt-3"><a class="text-dark" href="">Forgot your password?</a>
                    </div>
                    <button class="btn login_btn w-50"><span>Login</span></button>
                </form>
                <div>Chưa có tài khoản? <a href="">Đăng ký</a></div>
            </div>
        </div>
    </section>
@endsection
