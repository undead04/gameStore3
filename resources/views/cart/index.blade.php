@extends('layouts.games')
<div class="card">
    <div class="card-header">
        Game in cart
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped text-center">
            <thead>
                <th scope="col">ID</th>
                <th scope="col">Name Game</th>
                <th scope="col">Price</th>
            </thead>
            <tbody>
                @if (session()->get('cart'))
                    @foreach ($viewData['games'] as $game)
                        <tr>
                            <td scope=>{{ $game['id'] }}</td>
                            <td scope=>{{ $game['name'] }}</td>
                            <td scope=>{{ $game['price'] }}</td>

                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
        <div class="row">
            <div class="text-end">
                <a class="btn btn-outline-secondary mb-2"><strong>Total to pay {{ $viewData['total'] }}</strong></a>
                @if ($viewData['games'] > 0)
                    <a href="{{ route('cart.purchase') }}" class="btn bg-primary text-white mb-2">Purchase</a>
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
