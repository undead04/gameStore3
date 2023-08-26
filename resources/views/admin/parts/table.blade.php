<table class="table table-striped table-bordered">
    <col style="width: 10%" />
    <col style="width: 20%" />
    <col style="width: 30%" />
    <col style="width: 20%" />
    <col style="width: 20%" />
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Production</th>
            <th scope="col">Price</th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>

        @foreach ($viewData['games'] as $game)
            <tr>
                <th scope="row">{{ $game->getGameId() }}</th>
                <td>{{ $game->getNameGame() }}</td>
                <td>{{ $game->getPublisher() }}</td>
                <td>{{ $game->getPrice() }}</td>
                <td>
                    <form action="{{ route('admin.game.delete', ['id' => $game->getGameId()]) }}" method="post">
                        <a class="btn btn-primary"
                            href="{{ route('admin.game.edit', ['id' => $game->getGameId()]) }}"><i
                                class="fa-solid fa-pen-to-square"></i></a>
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger ms-2"><i class="fa-solid fa-trash-can"></i></button>
                    </form>
                </td>
            </tr>
        @endforeach

    </tbody>
</table>
