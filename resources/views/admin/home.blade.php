@extends('layouts.admin')
@section('table')
    <div class="row g-0 g-md-5">
        <div class="col-md-6">
            <a href="{{ route('admin.user') }}"
                class="admin_panel  mt-4 mt-md-0 bg-info text-light">
                <div class="admin_title">
                    <div class="admin_header">
                        <i class="fa-solid fa-user"></i>
                    </div>
                    User
                </div>
                <div class="fs-2 fs-md-1 pe-5 text-end">
                    {{ $viewData['userCount'] }}
                    people
                    joined</div>
            </a>
        </div>
        <div class="col-md-6">
            <a href="{{ route('admin.game.games') }}">
                <div class="admin_panel  mt-4 mt-md-0 bg-danger text-light">
                    <div class="admin_title">
                        <div class="admin_header">
                            <i class="fa-solid fa-trophy"></i>
                        </div>
                        Games
                    </div>
                    <div class="fs-2 fs-md-1 pe-5 text-end">+
                        {{ $viewData['gameCount'] }} hot
                        games
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-6">
            <a href="{{ route('admin.profit.index') }}"
                class="admin_panel  mt-4 mt-md-0 bg-warning text-light">
                <div class="admin_title">
                    <div class="admin_header">
                        <i class="fa-solid fa-money-check"></i>
                    </div>
                    Benefit
                </div>
                <div class="fs-2 fs-md-1 pe-5 text-end">
                    +₫{{ number_format($viewData['total'], 0, '.', ',') }}</div>
            </a>
        </div>
        <div class="col-md-6">
            <a href="{{ route('admin.genre.genres') }}"
                class="admin_panel  mt-4 mt-md-0 bg-primary text-light">
                <div class="admin_title">
                    <div class="admin_header">
                        <i class="fa-solid fa-bars-staggered"></i>
                    </div>
                    Genre
                </div>
                <div class="fs-2 fs-md-1 pe-5 text-end">
                    +{{ $viewData['genreCount'] }}
                    genres
                </div>
            </a>
        </div>
    </div>
@endsection
@section('script')
@endsection
