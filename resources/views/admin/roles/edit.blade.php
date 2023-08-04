@extends('layouts.admin')

@section('content')
    <!-- Page Heading -->

    <div class="row mb-3">
        <div class="col-md-6">
            <h1 class="h3 mb-2 text-gray-800">Role Edit Page</h1>
        </div>
        <div class="col-md-6 text-right">
            <a href="{{ route('admin.roles.index') }}" class="btn btn-outline-info">View Roles</a>
        </div>

        <div class="col-md-5">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin.roles.update', $role->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="name">Role Edit:</label>
                            <input type="text" class="form-control" placeholder="Enter Permission Name" id="name"
                                name="name" value="{{ $role->name }}" />
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="text-right">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-5">
            <div class="card">
                <div class="card-body">
                    <p class="font-weight-bold">Permissions:</p>

                    <div class="mb-3">
                        @foreach ($role->permissions as $p)
                            <span class="bg-gradient-danger text-white rounded px-2 py-1 mr-2">
                                {{ $p->name }}
                            </span>
                        @endforeach
                    </div>

                    <form action="{{ route('admin.roles.permissions', $role->id) }}" method="POST">
                        @csrf

                        <div class="form-group">
                            <label for="multiRole">Multi Select Permissions</label>
                            <select multiple class="form-control" id="multiRole" name="permissions[]">
                                @foreach ($permissions as $permission)
                                    <option value="{{ $permission->id }}" @selected($role->HasPermission($permission->name))>
                                        {{ $permission->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="text-right">
                            <button type="submit" class="btn btn-primary">Assign Permissions</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
