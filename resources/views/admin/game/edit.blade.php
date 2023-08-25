@extends('layouts.admin')
@section('table')
    <form action="{{ route('admin.game.update', ['id' => $viewData['game']->getGameId()]) }}" method="post" class="mb-5">
        @csrf
        @method('PUT')
        <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Name Game:</label>
        <div class="col-lg-10 col-md-6 col-sm-12">
            <input name="name" value="{{ $viewData['game']->getNameGame() }}" type="text" class="form-control">
            @error('name')
                <span class="text-danger">{{ $message }}</span>
            @enderror

        </div>
        <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Developer:</label>
        <div class="col-lg-10 col-md-6 col-sm-12">
            <input name="developer" value="{{ $viewData['game']->getDeveloper() }}" type="text" class="form-control">
            @error('developer')
                <span class='text-danger'>{{ $message }}</span>
            @enderror
        </div>

        <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Publisher:</label>
        <div class="col-lg-10 col-md-6 col-sm-12">
            <input name="publisher" value="{{ $viewData['game']->getPublisher() }}" type="text" class="form-control">
            @error('publisher')
                <span class='text-danger'>{{ $message }}</span>
            @enderror
        </div>
        <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Genre:</label>
        <div class="col-lg-10 col-md-6 col-sm-12">
            <input name="genre" value="{{ $viewData['game']->getGenre() }}" type="text" class="form-control">
            @error('genre')
                <span class='text-danger'>{{ $message }}</span>
            @enderror
        </div>
        <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Price:</label>
        <div class="col-lg-10 col-md-6 col-sm-12">
            <input name="price" value="{{ $viewData['game']->getPrice() }}" type="number" class="form-control">
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
            <textarea class="form-control" name="description" rows="3">{{ $viewData['game']->getDescription() }}
            </textarea>
            @error('description')
                <span class='text-danger'>{{ $message }}</span>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>


    </form>
@endsection
