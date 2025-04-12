<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->paginate(10);
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title'      => 'required|string|max:255',
            'excerpt'    => 'nullable|string|max:500',
            'body'       => 'required|string',
            'image_url'  => 'nullable|url',
        ]);

        Post::create($data);

        return redirect()->route('posts.index')
                            ->with('success', 'Post created.');
    }

    public function show(Post $post)
    {
        return view('posts.ReadMore', compact('post'));
    }

    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        $data = $request->validate([
            'title'      => 'required|string|max:255',
            'excerpt'    => 'nullable|string|max:500',
            'body'       => 'required|string',
            'image_url'  => 'nullable|url',
        ]);

        $post->update($data);

        return redirect()->route('posts.show', $post)
                            ->with('success', 'Post updated.');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index')
                            ->with('success', 'Post deleted.');
    }
}
