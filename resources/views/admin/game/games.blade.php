@extends('layouts.admin')
@section('table')
    <table class="table table-striped table-bordered">
        <col style="width: 10%" />
        <col style="width: 20%" />
        <col style="width: 30%" />
        <col style="width: 20%" />
        <col style="width: 20%" />
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Production</th>
                <th scope="col">Price</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Minecraft</td>
                <td>Mojang</td>
                <td>$12</td>
                <td>
                    <a class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i></a>
                    <a class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></a>
                </td>
            </tr>
        </tbody>
    </table>
@endsection
