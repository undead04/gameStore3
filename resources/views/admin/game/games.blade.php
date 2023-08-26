@extends('layouts.admin')

@section('table')
    <div class="w-75 mx-auto text-end"><a href="{{ route('admin.game.create') }}"
            class="btn btn-lg btn-submit btn-primary">Create new
            table</a></div>
    <div class="w-75 mt-3 mx-auto">
        @include('admin.parts.table')
    </div>
@endsection
