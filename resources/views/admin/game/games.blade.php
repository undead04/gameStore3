@extends('layouts.admin')

@section('table')
    <form action="{{ route('admin.game.store') }}" method="post" class="mb-5">
        @csrf
        <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Name Game:</label>
        <div class="col-lg-10 col-md-6 col-sm-12">
            <input name="name" value="{{ old('name') }}" type="text" class="form-control">
            @error('name')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Developer:</label>
        <div class="col-lg-10 col-md-6 col-sm-12">
            <input name="developer" value="{{ old('developer') }}" type="text" class="form-control">
            @error('developer')
                <span class='text-danger'>{{ $message }}</span>
            @enderror
        </div>

        <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Publisher:</label>
        <div class="col-lg-10 col-md-6 col-sm-12">
            <input name="publisher" value="{{ old('publisher') }}" type="text" class="form-control">
            @error('publisher')
                <span class='text-danger'>{{ $message }}</span>
            @enderror
        </div>
        <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Genre:</label>
        <div class="col-lg-10 col-md-6 col-sm-12">
            <input name="genre" value="{{ old('genre') }}" type="text" class="form-control">
            @error('genre')
                <span class='text-danger'>{{ $message }}</span>
            @enderror
        </div>
        <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Price:</label>
        <div class="col-lg-10 col-md-6 col-sm-12">
            <input name="price" value="{{ old('price') }}" type="number" class="form-control">
            @error('price')
                <span class='text-danger'>{{ $message }}</span>
            @enderror
        </div>
        <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Image:</label>
        <div class="col-lg-10 col-md-6 col-sm-12">
            <input class="form-control" type="file" name="image">
        </div>

        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea class="form-control" name="description" rows="3">{{ old('description') }}
</textarea>
            @error('description')
                <span class='text-danger'>{{ $message }}</span>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>


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
                        <a class="btn btn-primary" href="{{ route('admin.game.edit', ['id' => $game->getGameId()]) }}"><i
                                class="fa-solid fa-pen-to-square"></i></a>
                        <form action="{{ route('admin.game.delete', ['id' => $game->getGameId()]) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
@endsection
