@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto py-12">
  <h1 class="text-3xl font-bold mb-6">Create New Post</h1>
  <form action="{{ route('posts.store') }}" method="POST">
    @csrf
    @include('posts.form', ['post' => new App\Models\Post])
    <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">Publish</button>
  </form>
</div>
@endsection
