@extends('layouts.app')
@section('title', $viewData['title'])
@section('subtitle', $viewData['subtitle'])
@section('content')
    @forelse ($viewData["orders"] as $order)
        <div class="card mb-4">
            <div class="card-header">
                Order #{{ $order->getOrderId() }}
            </div>
            <div class="card-body">
                <b>Date:</b> {{ $order->getCreatedAt() }}<br />
                <b>Total:</b> ${{ $order->getTotal() }}<br />
                <table class="table table-bordered table-striped text-center mt-3">
                    <thead>
                        <tr>
                            <th scope="col">Item ID</th>
                            <th scope="col">Product Name</th>
                            <th scope="col">Price</th>
                            <th scope="col">Quantity</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($order->gameOrders as $item)
                            <tr>

                                <td>{{ $item->getOrderId() }}</td>
                                <td>
                                    <a class="link-success"
                                        href="{{ route('clients.gamesDetail', ['id' => $item->getGameId()]) }}">
                                        {{ $item->game->getNameGame() }}
                                    </a>
                                </td>
                                <td>${{ $item->getPrice() }}</td>
                                <td>{{ $item->getQuantity() }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @empty
        <div class="alert alert-danger" role="alert">
            Seems to be that you have not purchased anything in our store =(.
        </div>
    @endforelse
@endsection
