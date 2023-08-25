@extends('layouts.admin')
@section('table')
    <form action="{{ route('admin.game.store') }}" method="post" class="mb-5 data_form">
        @csrf
        <h1 class="mb-3"><span class="fa-solid fa-gamepad"></span> Game controller</h1>
        <div class="form-group">
            <label class="form-label">Name:</label>
            <div class="flex-grow-1">
                <input name="name" value="{{ old('name') }}" type="text" class="form-control">
                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label class="form-label">Developer:</label>
            <div class="flex-grow-1">
                <input name="developer" value="{{ old('developer') }}" type="text" class="form-control">
                @error('developer')
                    <span class='text-danger'>{{ $message }}</span>
                @enderror
            </div>
        </div>

        <div class="form-group">
            <label class="form-label">Publisher:</label>
            <div class="flex-grow-1">
                <input name="publisher" value="{{ old('publisher') }}" type="text" class="form-control">
                @error('publisher')
                    <span class='text-danger'>{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label class="form-label">Genre:</label>
            <div class="flex-grow-1">
                <input name="genre" value="{{ old('genre') }}" type="text" class="form-control">
                @error('genre')
                    <span class='text-danger'>{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label class="form-label">Price:</label>
            <div class="flex-grow-1">
                <input name="price" value="{{ old('price') }}" type="number" class="form-control">
                @error('price')
                    <span class='text-danger'>{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label class="form-label">Image:</label>
            <div class="flex-grow-1">
                <input class="form-control" type="file" name="image">
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea class="form-control" name="description" rows="3">{{ old('description') }}
            </textarea>
            @error('description')
                <span class='text-danger'>{{ $message }}</span>
            @enderror
        </div>
        <button type="submit" class="btn btn-lg btn-primary">Submit</button>
    </form>
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
@endsection
