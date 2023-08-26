@extends('layouts.games')
@section('title', 'Exploring game')
@section('content')
    <section class="games-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    @include('clients.parts.sidebargenre')
                </div>
                <div class="col-md-9">
                    {{-- Filter here --}}
                    @include('clients/parts/filter')
                    <div class="all-games">
                        <div class="row g-2">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
