<?php

namespace App\Http\Controllers;

use App\Models\Post;

class HomepageController extends Controller
{
    public function index()
    {
        // Fetch latest 6 posts
        $posts = Post::latest()->take(6)->get();

        return view('homepage', compact('posts'));
    }
}
