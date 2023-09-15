@extends('layouts.games')
@section('title', $viewData['title'])
@section('content')
    <section class="games-page bg-dark">
        <link href="{{ asset('/css//clients/games.css') }}" rel="stylesheet" />

        <div class="container-md">
            <div class="row">
            </div>
        </div>

        <div class="container-md">
            <div class="row flex-grow-1">
                <div class="col-md-9">
                    <div class="row">
                        <div class="row">
                            @foreach ($viewData['games'] as $games)
                                @include('clients.compant.showGame')
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    @include('clients.parts.filter')
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection
