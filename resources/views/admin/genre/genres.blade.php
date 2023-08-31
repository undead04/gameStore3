@extends('layouts.admin')
@section('table')
    <div class="w-90 mt-3 mx-auto">
        <table class="table table-striped table-bordered">
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
            <tbody>
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
                                    <a class="btn btn-primary"
                                        href="{{ route('admin.genre.edit', ['id' => $genre->getTypeId()]) }}"><i
                                            class="fa-solid fa-pen-to-square"></i></a>
                                    @csrf
                                    @method('DELETE')
                                    <button
                                        class="btn btn-danger ms-2"><i
                                            class="fa-solid fa-trash-can"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                @endif


            </tbody>
        </table>

    </div>
    <div class="w-90 mx-auto text-end"><a
            href="{{ route('admin.genre.create') }}"
            class="btn btn-lg btn-submit btn-primary rounded-0">Add
            new
            genres</a></div>
@endsection
