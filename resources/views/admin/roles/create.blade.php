@extends('layouts.admin')

@section('content')
    <!-- Page Heading -->

    <div class="row mb-2">
        <div class="col-md-6">
            <h1 class="h3 mb-2 text-gray-800">Roles Create Page</h1>
        </div>
        <div class="col-md-6 text-right">
            <a href="{{ route('admin.roles.index') }}" class="btn btn-outline-info">View Role +</a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-5">
            <form action="{{ route('admin.roles.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Role Create:</label>
                    <input type="text" class="form-control" placeholder="Enter Role Name" id="name"
                        name="name" />
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="text-right">
                    <button type="submit" class="btn btn-primary">Create</button>
                </div>
            </form>
        </div>
    </div>
@endsection
