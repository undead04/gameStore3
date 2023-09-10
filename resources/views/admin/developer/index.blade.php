@extends('layouts.admin')

@section('table')
    <div class="mx-auto text-end"><a href="{{ route('admin.developer.create') }}"
            class="btn btn-lg btn-submit btn-primary rounded-0">Add Developer</a>
    </div>
    <div class="mt-3 mx-auto">
        <table class="table table-striped table-bordered align-middle">
            <col style="width: 5%" />
            <col style="width: 65%" />
            <col style="width: 20%" />

            <col style="width: 10%" />
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Banner</th>

                    <th scope="col">Options</th>
                </tr>
            </thead>
            <tbody>
                @if (count($viewData['developer']) == 0)
                    <tr>
                        <th colspan="5">Không có dữ liệu</th>
                    </tr>
                @else
                    @foreach ($viewData['developer'] as $developer)
                        <tr>
                            <th scope="row">
                                {{ $developer->getDeveloperId() }}</th>
                            <td>{{ $developer->getDeveloperName() }}</td>
                            <td>
                                <div>
                                    <img src="{{ '/storage/' . $developer->getDeveloperImage() }}"
                                        alt="" />
                                </div>

                            </td>

                            <td>
                                <form
                                    action="{{ route('admin.developer.delete', ['id' => $developer->getDeveloperId()]) }}"
                                    method="post"
                                    class="d-flex justify-content-start">
                                    <a class="btn btn-primary"
                                        href="{{ route('admin.developer.edit', ['id' => $developer->getDeveloperId()]) }}"><i
                                            class="fa-solid fa-pen-to-square"></i></a>
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger ms-2"><i
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
