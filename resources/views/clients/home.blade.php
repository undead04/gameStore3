@extends('layouts.client')
@section('title', $viewData['title'])
@section('content')
    @include('clients.parts.banner')
    <section class="py-5 bg-black">
        <div class="container-md">
            <a class="games_title">
                <h2 class="text-white my-3">Game on sale</h2>
            </a>
            <div class="row flex-nowrap overflow-x-scroll">
                @include('clients.parts.xItemsScroll')
            </div>
        </div>
    </section>
@endsection
