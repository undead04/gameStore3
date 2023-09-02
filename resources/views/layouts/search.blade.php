@extends('layouts.games')
@section('content')
    <h1>cho ma</h1>
    <h1>cho ma</h1>
    @foreach ($viewData['searchGame'] as $item)
        <h1>{{ $item }}</h1>
    @endforeach
@endsection
