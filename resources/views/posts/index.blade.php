@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto py-12">
  <h1 class="text-3xl font-bold mb-6">All Posts</h1>
  <a href="{{ route('posts.create') }}" class="bg-green-500 text-white px-4 py-2 rounded">New Post</a>

  @if(session('success'))
    <div class="bg-green-100 text-green-800 px-4 py-2 rounded mb-4">
      {{ session('success') }}
    </div>
  @endif

  <div class="mt-6 space-y-4">
    @foreach($posts as $post)
      <div class="p-4 bg-white rounded shadow">
        <div class="flex justify-between items-center">
          <div>
            <a href="{{ route('posts.show', $post) }}" class="text-xl font-semibold">{{ $post->title }}</a>
            <p class="text-gray-600 text-sm">{{ $post->created_at->diffForHumans() }}</p>
          </div>
          <div class="flex items-center space-x-2">
            <a href="{{ route('posts.edit', $post) }}" class="bg-blue-500 text-white px-3 py-1 rounded text-sm">Edit</a>

            <form action="{{ route('posts.destroy', $post) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this post?');">
              @csrf
              @method('DELETE')
              <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded text-sm">Delete</button>
            </form>
          </div>
        </div>
      </div>
    @endforeach
  </div>

  <div class="mt-6">{{ $posts->links() }}</div>
</div>
@endsection
