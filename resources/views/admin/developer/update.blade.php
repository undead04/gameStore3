@extends('layouts.admin')
@section('table')
    <form action="{{ route('admin.developer.update', ['id' => $viewData['developer']->getDeveloperId()]) }}" method="POST"
        enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <h1 class="mb-3"><i class="fa-solid fa-bars-staggered"></i> Developer
            Controller</h1>
        <div class="form-group">
            <label class="form-label">Developer name:</label>
            <div class="flex-grow-1">
                <input name="name" value="{{ $viewData['developer']->getDeveloperName() }}" type="text"
                    class="form-control bg-transparent text-light">
                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label class="form-label">Developer Logo:</label>
            <div class="flex-grow-1">
                <input class="form-control bg-transparent text-light" type="file" name="image">
                @error('image')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="mt-4 text-end"><button class="btn btn-lg btn-submit btn-primary">Submit</button>
        </div>

    </form>
@endsection
