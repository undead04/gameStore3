@extends('layouts.client')
@section('content')
    <section class="bg-black pb-5">
        <div class="container-md text-light">
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
                                            <img src="{{ '/storage/' . $game['image'] }}" alt="" class="img-fluid">
                                        </div>
                                    </div>
                                    <div class="cart_item_body">
                                        <div class="d-flex justify-content-between align-items-center h4">
                                            <div class="badge bg-secondary text-uppercase">
                                                base game</div>
                                            <div class="cart_item_price">
                                                @if ($game['discount'] == 100 || $game['price'] == 0)
                                                    <span class="">Free</span>
                                                @else
                                                    @if ($game['discount'] > 0)
                                                        <div
                                                            class="text-decoration-line-through text-secondary game_old_price">
                                                            đ{{ number_format($game['price'], 3, '.', ',') }}
                                                        </div>
                                                        <div class="text-light game_new_price">
                                                            đ{{ number_format($game['price'] - ($game['price'] * $game['discount']) / 100, 3, '.', ',') }}
                                                        </div>
                                                    @else
                                                        <div class="text-light game_new_price">
                                                            đ{{ number_format($game['price'], 3, '.', ',') }}
                                                        </div>
                                                    @endif
                                                @endif
                                            </div>
                                        </div>
                                        <div class="d-flex">
                                            {{-- cái này là link nhưng chưa làm  --}}
                                            <div class="cart_item_title">
                                                {{ $game['name'] }}
                                            </div>
                                        </div>
                                        <div class="d-flex mb-5">
                                            <div class="game_release_date text-secondary">
                                                Available <span>9/8/2023</span>
                                            </div>
                                        </div>
                                        <div class="d-block mt-5 cart_more_infoes">
                                            <span><i class="fa-solid fa-gem"></i></span>
                                            <span>Earn 5% back in Epic
                                                Rewards</span>
                                        </div>
                                        <div class="mt-4">
                                            <span class="h4">Self-Refundable</span>
                                            <span class="h4 ms-5 text-secondary">
                                                <i class="fa-regular fa-circle-question"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex flex-grow-1 cart_item_actions justify-content-between text-secondary">
                                    <span><i class="fa-brands fa-windows"></i></span>
                                    <a href="{{ route('cart.delete', ['id' => $game['id']]) }}"
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
                                            class="text-decoration-underline">đ</span>{{ number_format($viewData['total'], 3, '.', ',') }}</span>
                                </div>
                                <div class="payment_item">
                                    <span>Sale discount</span>
                                    <span><span>-</span><span
                                            class="text-decoration-underline">đ</span>{{ number_format($viewData['discount'], 3, '.', ',') }}</span>
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
                                            class="text-decoration-underline">đ</span>{{ number_format($viewData['totalPrice'], 3, '.', ',') }}</span>
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
                    <div class="text-light"><i class="fa-regular fa-face-sad-tear" style="font-size: 10rem"></i></div>
                    <span class="d-block display-3">Your cart is empty</span>
                    <a href="#" class="d-block lead text-secondary display-4">Shop for
                        Games & Apps</a>
                </div>
            @endif
        </div>
    </section>
@endsection
