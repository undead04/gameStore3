@extends('layouts.admin')
@section('title', 'Genres | Admin')
@section('table')
    <div class="w-100 d-flex align-items-center text-end">
        <div>
            <h1 class="text-dark display-2">Genre view</h1>
        </div>
        <a href="{{ route('admin.genre.create') }}"
            class="btn btn-lg btn-submit btn-info text-light rounded-0">Add a
            new
            genres</a>
    </div>
    <div class="w-100 mt-3 mx-auto table-responsive">
        <table class="table table-striped table-bordered table-info table-hover">
            <col style="width: 10%" />
            <col style="width: 80%" />
            <col style="width: 10%" />
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Options</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @if (count($viewData['genres']) == 0)
                    <tr>
                        <th colspan="2">Chưa có dữ liệu</th>
                    </tr>
                @else
                    @foreach ($viewData['genres'] as $genre)
                        <tr>
                            <th scope="row">
                                {{ $genre->getTypeId() }}</th>
                            <td>{{ $genre->getTypeGame() }}</td>
                            <td>
                                <form
                                    action="{{ route('admin.genre.delete', ['id' => $genre->getTypeId()]) }}"
                                    method="post"
                                    class="d-flex justify-content-start">
                                    <a class="btn btn-primary flex-grow-1"
                                        href="{{ route('admin.genre.edit', ['id' => $genre->getTypeId()]) }}"><i
                                            class="fa-solid fa-pen-to-square"></i></a>
                                    @csrf
                                    @method('DELETE')
                                    <button
                                        class="btn btn-danger ms-2 flex-grow-1"><i
                                            class="fa-solid fa-trash-can"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                @endif


            </tbody>
        </table>

    </div>
@endsection
