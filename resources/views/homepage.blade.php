<!DOCTYPE html>
<html lang="en" class="transition duration-300">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>The Daily Crave – Food Blog</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
  </head>

  <body class="bg-gray-50 text-gray-800 dark:bg-gray-900 dark:text-gray-100 antialiased transition duration-300">

    {{-- Header --}}
    <header class="flex items-center justify-between px-6 py-4 shadow bg-white dark:bg-gray-800">
      @include('partials.header')
    </header>

    <main>

      {{-- Hero Section --}}
      <section 
        id="home"
        class="relative h-[90vh] bg-cover bg-center flex items-center justify-center text-white"
        style="background-image: url('https://www.vacationhive.com/images/hives/24/24-baguio-main-banner2022.jpg');"
        aria-label="Hero Section"
      >
        <div class="absolute inset-0 bg-black bg-opacity-60 backdrop-blur-sm"></div>
        <div class="relative z-10 text-center px-6 max-w-3xl">
          <h1 class="text-5xl md:text-6xl font-extrabold leading-tight mb-4 drop-shadow-lg">
            Welcome to <span class="text-orange-400">The Daily Crave</span>
          </h1>
          <p class="text-xl md:text-2xl mb-8 drop-shadow-sm">
            Indulge in mouth‑watering recipes & culinary adventures
          </p>
          <a 
            href="#blog"
            class="inline-block bg-orange-500 hover:bg-orange-600 text-white font-semibold px-8 py-4 rounded-xl shadow-lg transition-all duration-300 transform hover:scale-105"
          >
            Explore Latest Blogs →
          </a>
        </div>
      </section>

      {{-- Blog Previews --}}
      <section id="blog" class="py-20 bg-white dark:bg-gray-950">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <h2 class="text-4xl font-bold text-center text-gray-900 dark:text-white mb-14">
            Latest from the Blog
          </h2>

          <div class="grid gap-10 sm:grid-cols-2 lg:grid-cols-3">
            @forelse($posts as $post)
              <article class="bg-white dark:bg-gray-800 rounded-2xl overflow-hidden shadow-md hover:shadow-xl transition-transform transform hover:-translate-y-1 duration-300">
                <img 
                  src="{{ $post->image_url ?? 'https://source.unsplash.com/featured/?food' }}" 
                  alt="{{ $post->title }}" 
                  class="w-full h-56 object-cover"
                />
                <div class="p-6">
                  <p class="text-sm text-gray-400 mb-1">
                    {{ $post->created_at->format('F j, Y') }}
                  </p>
                  <h3 class="text-xl font-semibold text-gray-800 dark:text-white mb-3 hover:text-orange-500 transition">
                    {{ \Illuminate\Support\Str::limit($post->title, 50) }}
                  </h3>
                  <p class="text-gray-600 dark:text-gray-300 mb-4">
                    {{ \Illuminate\Support\Str::limit($post->excerpt ?? $post->body, 100) }}
                  </p>
                  <a 
                    href="{{ route('posts.readmore', $post) }}" 
                    class="text-orange-500 font-medium hover:underline"
                  >
                    Read More →
                  </a>
                </div>
              </article>
            @empty
              <div class="col-span-full text-center text-gray-500 dark:text-gray-400">
                No blog posts available at the moment. Check back later!
              </div>
            @endforelse
          </div>
        </div>
      </section>

    </main>

    {{-- Footer --}}
    @include('partials.footer')

    {{-- Dark Mode Toggle Script --}}
    <script>
      const html = document.documentElement;

      if (localStorage.getItem('theme') === 'dark') {
        html.classList.add('dark');
      }

      // Dark Mode Toggle Script (optional, in case you want to toggle programmatically)
      const toggle = document.getElementById('darkToggle');
      if (toggle) {
        toggle.addEventListener('click', () => {
          html.classList.toggle('dark');
          localStorage.setItem('theme', html.classList.contains('dark') ? 'dark' : 'light');
        });
      }
    </script>

  </body>
</html>
