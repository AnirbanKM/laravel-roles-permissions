@extends('layouts.admin')

@section('content')
    <!-- Page Heading -->
    <div class="row mb-2">
        <div class="col-md-6">
            <h1 class="h3 mb-2 text-gray-800">Permissions Page</h1>
        </div>
        <div class="col-md-6 text-right">
            <a href="{{ route('admin.permissions.create') }}" class="btn btn-outline-info">Create Permission +</a>
        </div>

        @if (Session::has('message'))
            <div class="col-6 mt-2">
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>{{ Session::get('message') }}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        @endif
    </div>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Edit</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($permissions as $permission)
                <tr>
                    <th scope="row">{{ $loop->index + 1 }}</th>
                    <td>{{ $permission->name }}</td>
                    <td>
                        <a href="{{ route('admin.permissions.edit', $permission->id) }}" class="btn btn-primary">
                            Edit
                        </a>
                        <form action="{{ route('admin.permissions.destroy', $permission->id) }}" method="post"
                            onsubmit="return confirm('Are you sure ?')" class="d-inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-outline-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
