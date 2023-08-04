@extends('layouts.admin')

@section('content')
    <!-- Page Heading -->

    <div class="row mb-2">
        <div class="col-md-6">
            <h1 class="h3 mb-2 text-gray-800">Users Edit Page</h1>
        </div>
        <div class="col-md-6 text-right">
            <a href="{{ route('admin.users.index') }}" class="btn btn-outline-info">View Users</a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-5">
            <form action="{{ route('admin.users.update', $user->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="name">User Name:</label>
                    <input type="text" class="form-control" placeholder="Enter user Name" id="name" name="name"
                        value="{{ $user->name }}" />
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="email">User Email:</label>
                    <input type="email" class="form-control" placeholder="Enter email Name" id="email" name="email"
                        value="{{ $user->email }}" />
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="multiRole">Select Role</label>
                    <select class="form-control" id="multiRole" name="role_id">
                        @foreach ($roles as $role)
                            <option value="{{ $role->id }}" @selected($user->hasRole($role->name))>
                                {{ $role->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('role_id')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="text-right">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
@endsection
