<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>About Us – The Daily Crave</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50">
  @include('partials.header')

  <main>
    {{-- Hero Section --}}
    <section class="relative bg-cover bg-center" style="background-image:url('https://source.unsplash.com/1600x900/?kitchen,team')">
      <div class="bg-black bg-opacity-60">
        <div class="max-w-7xl mx-auto px-4 py-32 text-center text-white">
          <h1 class="text-5xl font-bold">Meet the Team Behind The Daily Crave</h1>
          <p class="mt-4 text-xl">Sharing the joy of cooking, one recipe at a time.</p>
        </div>
      </div>
    </section>

    {{-- About Content --}}
    <section class="py-16 bg-white">
      <div class="max-w-4xl mx-auto px-6">
        <h2 class="text-3xl font-bold text-orange-500 mb-6 text-center">Our Story</h2>
        <p class="text-lg text-gray-700 leading-relaxed mb-6">
        The Daily Crave started with a passion for food and storytelling. From home-cooked meals to international flavors, we aim to bring a bit of everything to your table. Whether you're a seasoned chef or just starting your cooking journey, our blog offers something for everyone.
        </p>
        <p class="text-lg text-gray-700 leading-relaxed mb-6">
          Our team is made up of foodies, photographers, and culinary adventurers who love to share recipes, restaurant finds, and cooking tips. We believe that food connects people — and we're here to help you savor every bite.
        </p>
        <div class="text-center">
          <a href="{{ route('homepage') }}" class="inline-block mt-6 bg-orange-500 text-white px-6 py-3 rounded hover:bg-orange-600">Explore Our Blog</a>
        </div>
      </div>
    </section>
  </main>

  @include('partials.footer')
</body>
</html>
