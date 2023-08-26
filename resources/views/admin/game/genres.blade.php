@extends('layouts.admin')
@section('table')
    <form action="{{ route('admin.genres.store') }}" method="POST">
        @csrf
        <h1 class="mb-3"><i class="fa-solid fa-bars-staggered"></i> Genres Controller</h1>
        <div class="form-group">
            <label class="form-label">Type name:</label>
            <div class="flex-grow-1">
                <input name="typeName" value="{{ old('name') }}" type="text"
                    class="form-control bg-transparent text-light">
                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="mt-4 text-end"><button class="btn btn-lg btn-submit btn-primary">Submit</button></div>

    </form>
@endsection
