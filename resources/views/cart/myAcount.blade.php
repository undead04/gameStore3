@extends('layouts.client')
@section('title', $viewData['title'])
@section('subtitle', $viewData['subtitle'])
@section('content')
    <section class="bg-black py-5">
        <div class="container-md ">
            <div class="mb-5">
                <span class="text-capitalize text-light order_title">My Order</span>
            </div>
            <div class="row">
                <div class="order_list col-12 col-md-10">
                    <div class="table-responsive">
                        <table
                            class="table align-middle table-dark text-light table-bordered border-light table-striped w-100 display-6 text-center">
                            <col style="width: 10%" />
                            <col style="width: 75%" />
                            <col style="width: 15%" />
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>
                                        <table class="table-dark w-100">
                                            <col style="width: 20%" />
                                            <col style="width: 60%" />
                                            <col style="width: 20%" />
                                            <thead>
                                                <tr>
                                                    <td>Name</td>
                                                    <td>Developer</td>
                                                    <td>Price (vnd)</td>
                                                </tr>
                                            </thead>
                                        </table>
                                    </th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody class="table-group-divider">
                                @forelse ($viewData["orders"] as $order)
                                    <tr>
                                        <td>
                                            {{ $order->getOrderId() }}
                                        </td>
                                        <td>
                                            <table class="table-dark table-striped w-100">
                                                <col style="width: 20%" />
                                                <col style="width: 60%" />
                                                <col style="width: 20%" />
                                                <tbody>
                                                    @foreach ($order->gameOrders as $item)
                                                        <tr>
                                                            <td>
                                                                <a class="link-success"
                                                                    href="{{ route('clients.gamesDetail', ['id' => $item->getGameId()]) }}">
                                                                    {{ $item->game->getNameGame() }}
                                                                </a>
                                                            </td>
                                                            <td>
                                                                {{ $item->game->developer->getDeveloperName() }}
                                                            </td>
                                                            <td>${{ $item->getPrice() }}
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </td>
                                        <td>
                                            ${{ $order->getTotal() }}
                                        </td>
                                        {{-- <table
                                            class="text-secondary table-striped w-100 display-6 text-center">
                                            <col style="width: 50%" />
                                            <col style="width: 35%" />
                                            <col style="width: 15%" />
                                            <tbody class="">
                                                <tr>
                                                    <td>Free Fire</td>
                                                    <td>Developer 1</td>
                                                    <td>1000</td>
                                                </tr>
                                                <tr>
                                                    <td>Minecraft</td>
                                                    <td>Developer 2</td>
                                                    <td>2000</td>
                                                </tr>
                                                <tr>
                                                    <td>Minecraft</td>
                                                    <td>Developer 2</td>
                                                    <td>2000</td>
                                                </tr>
                                            </tbody>
                                        </table> --}}
                                    </tr>
                                    {{-- <tr>
                                        <td>Minecraft</td>
                                        <td>Developer 2</td>
                                        <td>2000</td>

                                    </tr> --}}
                                @empty
                                    <td colspan="3" class="text-danger fw-bold">
                                        Seems to be that you have not purchased
                                        anything in our store =(.
                                    </td>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                </div>
                <div class="user_balance d-none d-md-block col-md-2"></div>
            </div>
        </div>
    </section>

    {{-- Cái order cũ --}}
    {{-- @forelse ($viewData["orders"] as $order)
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
    @endforelse --}}
@endsection
