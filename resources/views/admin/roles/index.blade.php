@extends('layouts.admin')

@section('content')
    <!-- Page Heading -->

    <div class="row mb-2">
        <div class="col-md-6">
            <h1 class="h3 mb-2 text-gray-800">Roles Page</h1>
        </div>
        <div class="col-md-6 text-right">
            <a href="{{ route('admin.roles.create') }}" class="btn btn-outline-info">Create Role +</a>
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
                <th scope="col">Permissions</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($roles as $role)
                <tr>
                    <th scope="row">{{ $loop->index + 1 }}</th>
                    <td>{{ $role->name }}</td>
                    <td>
                        @forelse ($role->permissions as $rp)
                            <span class="bg-gradient-info text-white rounded px-2 py-1 mr-2">
                                {{ $rp->name }}
                            </span>
                        @empty
                            <span class="text-gray rounded px-2 py-1">
                                No Permissions
                            </span>
                        @endforelse
                    </td>
                    <td>
                        <a href="{{ route('admin.roles.edit', $role->id) }}" class="btn btn-primary">
                            Edit
                        </a>

                        <form action="{{ route('admin.roles.destroy', $role->id) }}" method="post"
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
