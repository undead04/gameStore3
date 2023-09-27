@extends('layouts.admin')
@section('title', 'Users | Admin')

@section('table')
    <div class="d-flex align-items-center justify-content-between text-end">
        <div>
            <h1 class="text-dark display-2">User</h1>
        </div>
    </div>

    <div class="mt-3 mx-auto table-responsive">
        <table class="table table-info table-hover table-bordered">
            <col style="width: 10%" />
            <col style="width: 30%" />
            <col style="width: 30%" />
            <col style="width: 30%" />
            <thead>
                <tr>
                    <th scope="col">User ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Role</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @if (count($viewData['users']) == 0)
                    <tr>
                        <th colspan="4">Chưa có dữ liệu</th>
                    </tr>
                @else
                    @foreach ($viewData['users'] as $index => $user)
                        <tr>
                            <th scope="row">
                                {{ $user->id }}</th>
                            <td>{{ $user->name }}
                            </td>
                            <td class="text-success">
                                {{ $user->email }}
                            </td>
                            <td>{{ $user->role }}</span>
                            </td>

                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>

    </div>
@endsection
