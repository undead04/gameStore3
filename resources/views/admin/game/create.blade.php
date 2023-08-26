@extends('layouts.admin')
@section('table')
    <form action="{{ route('admin.game.store') }}" method="post" class="mb-5">
    @section('table')
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
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Publisher:</label>
        <div class="col-lg-10 col-md-6 col-sm-12">
            <input name="publisher" value="{{ old('publisher') }}" type="text" class="form-control">
            @error('publisher')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Genre:</label>
        <div class="col-lg-10 col-md-6 col-sm-12">

            <select name="genre" id="" style="width: 100%">
                @foreach ($viewData['typeGame'] as $type)
                    <option value="{{ $type->getTypeId() }}">{{ $type->getTypeGame() }}</option>
                @endforeach
            </select>
            @error('genre')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Price:</label>
        <div class="col-lg-10 col-md-6 col-sm-12">
            <input name="price" value="{{ old('price') }}" type="number" class="form-control">
            @error('price')
                <span class="text-danger">{{ $message }}</span>
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
                <span class="text-danger">{{ $message }}</span>
            @enderror

        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="{{ route('admin.game.games') }}" class="btn btn-primary">back</a>


    </form>
@endsection
