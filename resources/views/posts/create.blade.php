@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row mb-2">
            <div class="col-md-6">
                <h1 class="h3 mb-2 text-gray-800">Post Create Page</h1>
            </div>
            <div class="col-md-6 text-end">
                <a href="{{ route('posts.index') }}" class="btn btn-outline-info">View Post</a>
            </div>
        </div>

        <div class="row">
            <div class="col-md-5">
                <form action="{{ route('posts.store') }}" method="POST">
                    @csrf

                    <div class="form-group mb-3">
                        <label for="name">Title:</label>
                        <input type="text" class="form-control" placeholder="Enter title" id="title"
                            name="title" />
                        @error('title')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="body">Body:</label>
                        <input type="text" class="form-control" placeholder="Enter body" id="body" name="body" />
                        @error('body')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="text-end">
                        <button type="submit" class="btn btn-primary">Create</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
