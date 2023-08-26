@extends('layouts.admin')
@section('table')
    <form action="{{ route('admin.game.update', ['id' => $viewData['game']->getGameId()]) }}" method="post"
        enctype="multipart/form-data" class="w-75 mx-auto data_form">
        @csrf
        @method('PUT')
        <h1 class="mb-3">Edit games <span class="fa-solid fa-pen-to-square"></span></h1>
        <div class="form-group">
            <label class="form-label">Name<span><sup class="text-danger fw-bold">*</sup></span>:</label>
            <div class="flex-grow-1">
                <input name="name" value="{{ $viewData['game']->getNameGame() }}" type="text"
                    class="text-light bg-transparent form-control">
                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label class="form-label">Developer<span><sup class="text-danger fw-bold">*</sup></span>:</label>
            <div class="flex-grow-1">
                <input name="developer" value="{{ $viewData['game']->getDeveloper() }}" type="text"
                    class="text-light bg-transparent form-control">
                @error('developer')
                    <span class='text-danger'>{{ $message }}</span>
                @enderror
            </div>
        </div>

        <div class="form-group">
            <label class="form-label">Publisher<span><sup class="text-danger fw-bold">*</sup></span>:</label>
            <div class="flex-grow-1">
                <input name="publisher" value="{{ $viewData['game']->getPublisher() }}" type="text"
                    class="text-light bg-transparent form-control">
                @error('publisher')
                    <span class='text-danger'>{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label class="form-label">Genre<span><sup class="text-danger fw-bold">*</sup></span>:</label>
            <div class="flex-grow-1">
                <input name="genre" value="{{ $viewData['game']->getGenre() }}" type="text"
                    class="text-light bg-transparent form-control">
                @error('genre')
                    <span class='text-danger'>{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label class="form-label">Price<span><sup class="text-danger fw-bold">*</sup></span>:</label>
            <div class="flex-grow-1">
                <input name="price" value="{{ $viewData['game']->getPrice() }}" type="number"
                    class="text-light bg-transparent form-control">
                @error('price')
                    <span class='text-danger'>{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label class="form-label">Image<span><sup class="text-danger fw-bold">*</sup></span>:</label>
            <div class="flex-grow-1">
                <input class="text-light bg-transparent form-control" type="file" name="image"
                    value="{{ $viewData['game']->getIamge() }}">
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label">Description<span><sup class="text-danger fw-bold">*</sup></span>:</label>
            <textarea class="text-light bg-transparent form-control" name="description" rows="3">{{ $viewData['game']->getDescription() }}
        </textarea>
            @error('description')
                <span class='text-danger'>{{ $message }}</span>
            @enderror
        </div>
        <div class="text-end">
            <button type="submit" class="btn btn-lg btn-submit btn-primary">Submit</button>
            <a class="btn btn-lg btn-danger btn-submit" href="{{ route('admin.game.games') }}">Cancel</a>


    </form>
@endsection
