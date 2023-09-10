@extends('layouts.admin')
@section('table')
    <div class="card w-100 text-light rounded-2 text-center  bg-transparent mx-auto">
        <div class="card-body p-5 home_admin">
            <div class="card-title display-2">Welcome to Admin panel center!!!</div>
            <p class="card-text display-6">Use these controll in the main menu to
                start</p>
            <p class="card-text display-6"><small class="text-dark timer">0/00/0000,
                    00:00:00 AM</small></p>
        </div>
    </div>
@endsection
@section('script')
    <script>
        setInterval(() => {
            const d = new Date();
            document.querySelector('.timer').innerText = d.toLocaleString();
        }, 1000);
    </script>
@endsection
