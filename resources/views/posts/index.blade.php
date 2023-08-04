@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row mb-3">
            <div class="col-md-6">
                <h1 class="h3 mb-2 text-gray-800">Post Page</h1>
            </div>

            @can('create', App\Models\Post::class)
                <div class="col-md-6 text-end">
                    <a href="{{ route('posts.create') }}" class="btn btn-outline-info">Create Post +</a>
                </div>
            @endcan

        </div>

        <div class="row">
            @foreach ($posts as $post)
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <h5>{{ $post->id }} - {{ $post->title }}</h5>
                            <p>{{ $post->body }}</p>

                            @can('update', $post)
                                <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-outline-primary">
                                    Edit
                                </a>
                            @endcan

                            @can('delete', $post)
                                <form action="{{ route('posts.destroy', $post->id) }}" method="post"
                                    onsubmit="return confirm('Are you sure ?')" class="d-inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger">Delete</button>
                                </form>
                            @endcan

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
