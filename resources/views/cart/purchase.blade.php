@extends('layouts.games')
@section('title', $viewData['title'])
@section('subtitle', $viewData['subtitle'])
@section('content')
    <section class="bg-dark py-5">
        <div class="container-md">
            <div class="mb-5">
                <span class="text-capitalize cart_title">Purchase Completed</span>
            </div>
            <div class="alert alert-success fs-4" role="alert">
                Congratulations, purchase completed. Order number is
                <b>#{{ $viewData['order']->getOrderId() }}</b>
            </div>
        </div>
    </section>
@endsection
