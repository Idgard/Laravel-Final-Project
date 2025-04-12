@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto py-12">
  <h1 class="text-4xl font-bold mb-4">{{ $post->title }}</h1>
  <p class="text-sm text-gray-500 mb-6">{{ $post->created_at->format('F j, Y') }}</p>
  @if($post->image_url)
    <img src="{{ $post->image_url }}" class="w-full rounded mb-6">
  @endif
  <div class="prose lg:prose-xl">
    {!! nl2br(e($post->body)) !!}
  </div>
  <div class="mt-8 flex space-x-4">
    <a href="{{ route('posts.edit', $post) }}" class="bg-blue-500 text-white px-4 py-2 rounded">Edit</a>
    <form action="{{ route('posts.destroy', $post) }}" method="POST">
      @csrf @method('DELETE')
      <button class="bg-red-500 text-white px-4 py-2 rounded"
              onclick="return confirm('Delete this post?')">Delete</button>
    </form>
  </div>
</div>
@endsection
