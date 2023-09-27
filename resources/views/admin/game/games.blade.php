@extends('layouts.admin')
@section('title', 'Games | Admin')
@section('table')
    <div class="d-flex align-items-center justify-content-between text-end">
        <div>
            <h1 class="text-dark display-2">Games view</h1>
        </div>
        <a href="{{ route('admin.game.create') }}"
            class="btn btn-lg btn-submit btn-info text-light rounded-0">Add a
            new
            game</a>
    </div>
    <div class="mt-3 mx-auto table-responsive">
        <table class="table table-striped table-info table-hover table-bordered">
            <col style="width: 5%" />
            <col style="width: 20%" />
            <col style="width: 40%" />
            <col style="width: 25%" />
            <col style="width: 10%" />
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Production</th>
                    <th scope="col">Price</th>
                    <th scope="col">Options</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @if (count($viewData['games']) == 0)
                    <tr>
                        <th colspan="5">Chưa có dữ liệu</th>
                    </tr>
                @else
                    @foreach ($viewData['games'] as $game)
                        <tr>
                            <th scope="row">
                                {{ $game->getGameId() }}</th>
                            <td>{{ $game->getNameGame() }}</td>
                            <td>{{ $game->getPublisher() }}</td>
                            <td>₫{{ number_format($game->getPrice(), 0, '.', ',') }}</span>
                            </td>
                            <td>
                                <form
                                    action="{{ route('admin.game.delete', ['id' => $game->getGameId()]) }}"
                                    method="post" class="d-flex">
                                    <a class="btn btn-primary flex-grow-1"
                                        href="{{ route('admin.game.edit', ['id' => $game->getGameId()]) }}"><i
                                            class="fa-solid fa-pen-to-square"></i></a>
                                    @csrf
                                    @method('DELETE')
                                    <button
                                        class="btn btn-danger ms-2 flex-grow-1"><i
                                            class="fa-solid fa-trash-can"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>

    </div>
z
@endsection
