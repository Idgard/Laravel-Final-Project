@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto py-12">
  <h1 class="text-3xl font-bold mb-6">Edit Post</h1>
  <form action="{{ route('posts.update', $post) }}" method="POST">
    @csrf @method('PATCH')
    @include('posts.partials.form')
    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Update</button>
  </form>
</div>
@endsection
