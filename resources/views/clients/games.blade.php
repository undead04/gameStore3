@extends('layouts.games')
@section('title', $viewData['title'])
@section('content')
    <section class="games-page bg-dark">
        <link href="{{ asset('/css//clients/games.css') }}" rel="stylesheet" />

        <div class="container-md">
            <div class="row flex-grow-1">
                <div class="col-12 col-md-9 order-2 order-md-3">
                    <div class="row mt-4">
                        @foreach ($viewData['games'] as $games)
                            @include('clients.compant.showGame')
                        @endforeach
                    </div>
                </div>
                <div class="col-12 col-md-3 order-1 order-md-4">
                    @include('clients.parts.filter')
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection
