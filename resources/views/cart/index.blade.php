@extends('layouts.client')
@section('content')
    <section>
        <div class="container-md text-light">
            <div class="card bg-transparent">
                <div class="card-header display-3 text-light">
                    Game in cart
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
            </div>
        </div>
    </section>
@endsection
