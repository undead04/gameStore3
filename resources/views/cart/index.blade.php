@extends('layouts.client')
@section('content')
    <section class="bg-black pb-5">
        <div class="container-md text-light">
            {{-- <div class="card bg-transparent">
                <div class="card-header display-3 text-light text-capitalize">
                    my cart
                </div>
                <div class="card-body">
                    <table
                        class="table table-bordered table-dark table-striped bg-transparent fs-2">
                        <col style="width: 5%" />
                        <col style="width: 70%" />
                        <col style="width: 15%" />
                        <col style="width: 10%" />
                        <thead>
                            <th scope="col">ID</th>
                            <th scope="col">Name Game</th>
                            <th scope="col">Price</th>
                            <th scope="col"></th>
                        </thead>
                        <tbody>
                            @if (session()->get('cart'))
                                @foreach ($viewData['games'] as $game)
                                    <tr>
                                        <td scope="col">{{ $game['id'] }}</td>
                                        <td scope="col">{{ $game['name'] }}</td>
                                        <td scope="col">{{ $game['price'] }}</td>
                                        <td scope="col">
                                            <div
                                                class="d-inline-flex align-items-center justify-content-between h-100">
                                                <a href=""
                                                    class="btn btn-danger rounded-0 flex-grow-1">Remove</a>
                                                <a href=""
                                                    class="btn btn-success rounded-0 flex-grow-1 ms-2">Pay</a>
                                            </div>
                                        </td>

                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <th colspan="4">No games
                                        were chosen</th>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                    <div class="row">
                        <div class="text-end">
                            <a class="btn btn-outline-secondary mb-2"><strong>Total
                                    to
                                    pay
                                    {{ $viewData['total'] }}</strong></a>
                            @if ($viewData['games'] > 0)
                                <a href="{{ route('cart.purchase') }}"
                                    class="btn bg-primary text-white mb-2">Purchase</a>
                                <a href="{{ route('cart.delete') }}">
                                    <button class="btn btn-danger mb-2">
                                        Remove all product from cart
                                    </button>
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
            </div> --}}

            <div class="mb-5">
                <span class="text-capitalize cart_title">My cart</span>
            </div>
            @if (session()->get('cart'))
                <div class="row">
                    <div class="cart_lists col-12  col-md-8">
                        @foreach ($viewData['games'] as $game)
                            <div class="cart_item bg-dark">
                                <div class="cart_item_section">
                                    <div class="cart_item_avatar">
                                        <div>
                                            <img src="{{ '/storage/' . $game['image'] }}"
                                                alt="" class="img-fluid">
                                        </div>
                                    </div>
                                    <div class="cart_item_body">
                                        <div
                                            class="d-flex justify-content-between align-items-center h4">
                                            <div
                                                class="badge bg-secondary text-uppercase">
                                                base game</div>
                                            <div class="cart_item_price">
                                                <span
                                                    class="text-decoration-underline">đ</span>
                                                <span
                                                    class="">{{ $game['price'] }}</span>
                                            </div>
                                        </div>
                                        <div class="d-flex">
                                            {{-- cái này là link nhưng chưa làm  --}}
                                            <div class="cart_item_title">
                                                {{ $game['name'] }}
                                            </div>
                                        </div>
                                        <div class="d-flex mb-5">
                                            <div
                                                class="game_release_date text-secondary">
                                                Available <span>9/8/2023</span>
                                            </div>
                                        </div>
                                        <div class="d-block mt-5 cart_more_infoes">
                                            <span><i
                                                    class="fa-solid fa-gem"></i></span>
                                            <span>Earn 5% back in Epic
                                                Rewards</span>
                                        </div>
                                        <div class="mt-4">
                                            <span
                                                class="h4">Self-Refundable</span>
                                            <span class="h4 ms-5 text-secondary">
                                                <i
                                                    class="fa-regular fa-circle-question"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="d-flex flex-grow-1 cart_item_actions justify-content-between text-secondary">
                                    <span><i
                                            class="fa-brands fa-windows"></i></span>
                                    <a href="#"
                                        class="text-decoration-underline text-secondary">
                                        Remove
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="pay_area col-md-4">
                        <div class="payment_section">
                            <div class="payment_title">
                                Games and Apps Summary
                            </div>
                            <div class="payment_body">
                                <div class="payment_item">
                                    <span>Price</span>
                                    <span><span
                                            class="text-decoration-underline">đ</span>{{ $viewData['total'] }}</span>
                                </div>
                                <div class="payment_item">
                                    <span>Sale discount</span>
                                    <span>-25%</span>
                                </div>
                                <div class="payment_item">
                                    <span>Taxes</span>
                                    <span class="text-secondary">Calculated at
                                        Checkout</span>
                                </div>
                                <hr>
                                <div class="payment_item payment_price">
                                    <span>Subtotal</span>
                                    <span><span
                                            class="text-decoration-underline">đ</span>{{ $viewData['total'] * 0.75 }}</span>
                                </div>
                                <a href="{{ route('cart.purchase') }}"
                                    class="btn btn-primary btn-lg text-uppercase w-100 payment_checkout">
                                    check
                                    out</a>
                            </div>
                        </div>
                    </div>
                </div>
            @else
                <div class="mx-auto w-50 text-center text-light">
                    <div class="text-light"><i
                            class="fa-regular fa-face-sad-tear display-3"></i></div>
                    <span class="d-block display-6">Your cart is empty</span>
                    <a href="#" class="d-block lead text-secondary">Shop for
                        Games & Apps</a>
                </div>
            @endif
        </div>
    </section>
@endsection
