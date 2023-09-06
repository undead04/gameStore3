@extends('layouts.admin')

@section('table')
    <div class="w-90 mt-3 mx-auto">
        <table class="table table-striped table-bordered">
            <col style="width: 5%" />
            <col style="width: 35%" />
            <col style="width: 40%" />

            <col style="width: 10%" />
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Image logo</th>

                    <th scope="col">Options</th>
                </tr>
            </thead>
            <tbody>
                @if (count($viewData['developer']) == 0)
                    <tr>
                        <th colspan="5">Chưa có dữ liệu</th>
                    </tr>
                @else
                    @foreach ($viewData['developer'] as $developer)
                        <tr>
                            <th scope="row">
                                {{ $developer->getDeveloperId() }}</th>
                            <td>{{ $developer->getDeveloperName() }}</td>
                            <td></td>

                            <td>
                                <form action="{{ route('admin.developer.delete', ['id' => $developer->getDeveloperId()]) }}"
                                    method="post" class="d-flex justify-content-start">
                                    <a class="btn btn-primary"
                                        href="{{ route('admin.developer.edit', ['id' => $developer->getDeveloperId()]) }}"><i
                                            class="fa-solid fa-pen-to-square"></i></a>
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger ms-2"><i class="fa-solid fa-trash-can"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                @endif


            </tbody>
        </table>

    </div>
    <div class="w-90 mx-auto text-end"><a href="{{ route('admin.developer.create') }}"
            class="btn btn-lg btn-submit btn-primary rounded-0">Add
            new
            game</a></div>
@endsection
