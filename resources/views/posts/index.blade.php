@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto py-12">
  <h1 class="text-3xl font-bold mb-6">All Posts</h1>
  <a href="{{ route('posts.create') }}" class="bg-green-500 text-white px-4 py-2 rounded">New Post</a>

  <div class="mt-6 space-y-4">
    @foreach($posts as $post)
      <div class="p-4 bg-white rounded shadow">
        <a href="{{ route('posts.show', $post) }}" class="text-xl font-semibold">{{ $post->title }}</a>
        <p class="text-gray-600 text-sm">{{ $post->created_at->diffForHumans() }}</p>
      </div>
    @endforeach
  </div>

  <div class="mt-6">{{ $posts->links() }}</div>
</div>
@endsection
