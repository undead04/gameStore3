@extends('layouts.admin')

@section('table')
    <div class="d-flex align-items-center justify-content-between text-end">
        <div>
            <h1 class="text-dark display-2">Benefit</h1>
        </div>
    </div>
    <div class="mt-3 mx-auto table-responsive">
        <table class="table table-info table-hover table-bordered">
            <col style="width: 10%" />
            <col style="width: 45%" />
            <col style="width: 25%" />
            <col style="width: 20%" />
            <thead>
                <tr>
                    <th scope="col">Order ID</th>
                    <th scope="col">Games</th>
                    <th scope="col">Profit</th>
                    <th scope="col">Time</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @if (count($viewData['orders']) == 0)
                    <tr>
                        <th colspan="4">Chưa có dữ liệu</th>
                    </tr>
                @else
                    @foreach ($viewData['orders'] as $index => $order)
                        <tr>
                            <th scope="row">
                                {{ $order->orderId }}</th>
                            <td><a class="text-primary text-decoration-underline"
                                    href="{{ route('clients.gamesDetail', ['id' => $order->gameId]) }}">{{ $order->name_Game }}</a>
                            </td>
                            <td class="text-success">
                                +₫{{ number_format($order->price, 0, '.', ',') }}
                            </td>
                            <td>{{ date('d-m-Y', strtotime($order->created_at)) }}</span>
                            </td>

                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>

    </div>

@endsection
