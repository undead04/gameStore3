@extends('layouts.admin')
@section('table')
    <form action="{{ route('admin.game.store') }}" method="post" class="mx-auto data_form" enctype="multipart/form-data">
        @csrf
        <h1 class="mb-3"><span class="fa-solid fa-gamepad"></span> Game controller
        </h1>
        <div class="form-group">
            <label class="form-label">Name<sup class="text-danger fw-bold">*</sup></span>:</label>
            <div class="flex-grow-1">
                <input name="name" value="{{ old('name') }}" type="text"
                    class="form-control bg-transparent text-primary">
                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label class="form-label">Developer<sup class="text-danger fw-bold">*</sup></span>:</label>
            <div class="flex-grow-1">
                <input name="developer" value="{{ old('developer') }}" type="text"
                    class="form-control bg-transparent text-primary">
                @error('developer')
                    <span class='text-danger'>{{ $message }}</span>
                @enderror
            </div>
        </div>

        <div class="form-group">
            <label class="form-label">Publisher<sup class="text-danger fw-bold">*</sup></span>:</label>
            <div class="flex-grow-1">
                <input name="publisher" value="{{ old('publisher') }}" type="text"
                    class="form-control bg-transparent text-primary">
                @error('publisher')
                    <span class='text-danger'>{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label class="form-label">Genre<sup class="text-danger fw-bold">*</sup></span>:</label>
            <div class="flex-grow-1">

                <select class="select_item form-select" name="genre[]" size="4" multiple='multiple'>
                    <option value="-1" disabled class="d-none">Genre</option>
                    @foreach ($viewData['typeGame'] as $type)
                        <option value="{{ $type->getTypeId() }}"
                            @if (old('genre')) @foreach (old('genre') as $genres)
                           {{ $genres == $type->getTypeId() ? 'selected' : '' }} 
                       @endforeach @endif>
                            {{ $type->getTypeGame() }}</option>
                    @endforeach
                </select>

                @error('genre')
                    <span class='text-danger'>{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label class="form-label">Price<sup class="text-danger fw-bold">*</sup></span>:</label>
            <div class="flex-grow-1">
                <input name="price" value="{{ old('price') }}" type="number"
                    class="form-control bg-transparent text-primary">
                @error('price')
                    <span class='text-danger'>{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label class="form-label">Discount<sup class="text-danger fw-bold">*</sup></span>:</label>
            <div class="flex-grow-1">
                <input name="discount" value="{{ old('discount') }}" type="number"
                    class="form-control bg-transparent text-primary">
                @error('discount')
                    <span class='text-danger'>{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label class="form-label">Image Main<sup class="text-danger fw-bold">*</sup></span>:</label>
            <div class="flex-grow-1">
                <input class="form-control bg-transparent text-primary" type="file" name="imageMain">
                @error('imageMain')
                    <span class='text-danger'>{{ $message }}</span>
                @enderror


            </div>
        </div>
        <div class="form-group">
            <label class="form-label">Image Paner<sup class="text-danger fw-bold">*</sup></span>:</label>
            <div class="flex-grow-1">
                <input class="form-control bg-transparent text-primary" type="file" name="imagePaner">
                @error('imagePaner')
                    <span class='text-danger'>{{ $message }}</span>
                @enderror

            </div>
        </div>
        <div class="form-group">
            <label class="form-label">Image Logo<sup class="text-danger fw-bold">*</sup></span>:</label>
            <div class="flex-grow-1">
                <input class="form-control bg-transparent text-primary" type="file" name="imageLogo">

                @error('imageLogo')
                    <span class='text-danger'>{{ $message }}</span>
                @enderror
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label">Description<sup class="text-danger fw-bold">*</sup></span>:</label>
            <textarea class="form-control bg-transparent text-primary" name="description" rows="3">{{ old('description') }}
        </textarea>
            @error('description')
                <span class='text-danger'>{{ $message }}</span>
            @enderror
        </div>

        <div class="text-end">
            <button class="btn btn-lg btn-submit btn-primary">Submit</button>
            <a class="btn btn-lg btn-danger btn-submit" href="{{ route('admin.game.games') }}">Cancel</a>
        </div>
    </form>
@endsection
