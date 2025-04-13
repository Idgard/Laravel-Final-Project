<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>{{ $post->title }} –  The Daily Crave</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50">
  @include('partials.header')

  <main class="py-16">
    <div class="max-w-3xl mx-auto px-4">
      {{-- Title & Meta --}}
      <h1 class="text-4xl font-bold mb-4">{{ $post->title }}</h1>
      <p class="text-sm text-gray-500 mb-6">
        {{ $post->created_at->format('F j, Y') }}
      </p>

      {{-- Featured Image --}}
      @if($post->image_url)
        <img
          src="{{ $post->image_url }}"
          alt="{{ $post->title }}"
          class="w-full h-auto rounded mb-8"
        >
      @endif

      {{-- Body --}}
      <div class="prose lg:prose-xl text-gray-800 mb-12">
        {!! nl2br(e($post->body)) !!}
      </div>

      {{-- Back to Homepage --}}
      <a
        href="{{ route('homepage') }}"
        class="inline-block bg-orange-500 text-white px-6 py-3 rounded hover:bg-orange-600 transition"
      >
        ← Back to Home
      </a>
    </div>
  </main>

  @include('partials.footer')
</body>
</html>
