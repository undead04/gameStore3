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
                                                                {{ $item->game->getDeveloper() }}
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
                                    <td colspan="3" class="text-light fw-bold">
                                        You have no orders. <a class="text-secondary"
                                            href="{{ route('clients.games') }}">Take
                                            a look?</a>
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
@endsection
