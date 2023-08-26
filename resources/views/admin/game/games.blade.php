@extends('layouts.admin')

@section('table')
    <a href="{{ route('admin.game.create') }}" class="btn btn-primary ms-auto">Create new table</a>
    <hr>
    <div class="w-75 mt-3 mx-auto">
        @include('admin.parts.table')
    </div>
@endsection
