<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        $this->authorize('create', Post::class);
        return view('posts.create');
    }

    public function store(Request $r)
    {
        $this->authorize('create', Post::class);
        $validate = $r->validate([
            'title' => 'required',
            'body' => 'required'
        ]);
        Post::create($validate);

        return to_route('posts.index');
    }

    public function edit()
    {
    }


    public function destroy()
    {
    }
}
