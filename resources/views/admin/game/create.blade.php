@extends('layouts.admin')
@section('table')
    <form action="{{ route('admin.game.store') }}" method="post" class="w-75 mx-auto data_form" enctype="multipart/form-data">
        @csrf
        <h1 class="mb-3"><span class="fa-solid fa-gamepad"></span> Game controller</h1>
        <div class="form-group">
            <label class="form-label">Name:</label>
            <div class="flex-grow-1">
                <input name="name" value="{{ old('name') }}" type="text"
                    class="form-control bg-transparent text-light">
                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label class="form-label">Developer:</label>
            <div class="flex-grow-1">
                <input name="developer" value="{{ old('developer') }}" type="text"
                    class="form-control bg-transparent text-light">
                @error('developer')
                    <span class='text-danger'>{{ $message }}</span>
                @enderror
            </div>
        </div>

        <div class="form-group">
            <label class="form-label">Publisher:</label>
            <div class="flex-grow-1">
                <input name="publisher" value="{{ old('publisher') }}" type="text"
                    class="form-control bg-transparent text-light">
                @error('publisher')
                    <span class='text-danger'>{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label class="form-label">Genre:</label>
            <div class="flex-grow-1">
                <select class="select_item" name="genre" id="">
                    <option value="-1" disabled class="d-none">Genre</option>
                    @foreach ($viewData['typeGame'] as $type)
                        <option value="{{ $type->getTypeId() }}">{{ $type->getTypeGame() }}</option>
                    @endforeach
                </select>
                @error('genre')
                    <span class='text-danger'>{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label class="form-label">Price:</label>
            <div class="flex-grow-1">
                <input name="price" value="{{ old('price') }}" type="number"
                    class="form-control bg-transparent text-light">
                @error('price')
                    <span class='text-danger'>{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label class="form-label">Image:</label>
            <div class="flex-grow-1">
                <input class="form-control bg-transparent text-light" type="file" name="image[]" multiple>
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea class="form-control bg-transparent text-light" name="description" rows="3">{{ old('description') }}
        </textarea>
            @error('description')
                <span class='text-danger'>{{ $message }}</span>
            @enderror
        </div>

        <button class="btn btn-lg btn-submit btn-primary">Submit</button>
        <a class="btn btn-lg btn-danger btn-submit" href="{{ route('admin.game.games') }}">Cancel</a>
    </form>
@endsection
