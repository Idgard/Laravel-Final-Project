<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Delicious Bites – Food Blog</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50">
  @include('partials.header')

  <main>
    {{-- Hero --}}
    <section id="home" class="relative bg-cover bg-center" style="background-image:url('https://source.unsplash.com/1600x900/?food')">
      <div class="bg-black bg-opacity-50">
        <div class="max-w-7xl mx-auto px-4 py-32 text-center text-white">
          <h1 class="text-6xl font-bold">Welcome to Delicious Bites</h1>
          <p class="mt-4 text-xl">Indulge in mouth‑watering recipes and culinary adventures</p>
          <a href="#blog" class="mt-8 inline-block bg-orange-500 px-6 py-3 rounded hover:bg-orange-600">Latest Blogs</a>
        </div>
      </div>
    </section>

    {{-- Blog Previews --}}
    <section id="blog" class="py-16">
      <div class="max-w-7xl mx-auto px-4">
        <h2 class="text-3xl font-bold text-gray-800 mb-8 text-center">Latest from the Blog</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
          @foreach($posts as $post)
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
          @endforeach
        </div>
      </div>
    </section>
  </main>

  @include('partials.footer')
</body>
</html>
