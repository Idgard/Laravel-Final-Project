<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>All Blogs – Delicious Bites</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50">
  @include('partials.header')

  <main>
    {{-- Page Banner --}}
    <section class="bg-orange-100 py-20 text-center">
      <div class="max-w-4xl mx-auto px-4">
        <h1 class="text-5xl font-bold text-gray-800">All Blog Posts</h1>
        <p class="mt-4 text-lg text-gray-600">Explore our delicious content below</p>
      </div>
    </section>

    {{-- All Blog Posts --}}
    <section class="py-16">
      <div class="max-w-7xl mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
          @forelse($posts as $post)
            <div class="bg-white rounded shadow hover:shadow-lg transition">
              <img src="{{ $post->image_url ?? 'https://source.unsplash.com/featured/?food' }}"
                   class="w-full h-48 object-cover" alt="{{ $post->title }}">
              <div class="p-6">
                <p class="text-sm text-gray-500 mb-1">
                  {{ $post->created_at->format('F j, Y') }}
                </p>
                <h3 class="text-xl font-bold mb-2">{{ \Illuminate\Support\Str::limit($post->title, 50) }}</h3>
                <p class="text-gray-700">{{ \Illuminate\Support\Str::limit($post->excerpt ?? $post->body, 100) }}</p>
                <a href="{{ route('posts.readmore', $post) }}"
                   class="text-orange-500 inline-block mt-4">Read More →</a>
              </div>
            </div>
          @empty
            <p class="text-gray-600 col-span-full text-center">No blog posts found.</p>
          @endforelse
        </div>
      </div>
    </section>
  </main>

  @include('partials.footer')
</body>
</html>
