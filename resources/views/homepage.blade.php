<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delicious Bites - Food Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-50">
    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center py-6">
                <a href="#" class="text-2xl font-bold text-orange-500">Delicious Bites</a>
                <nav class="hidden md:block">
                    <ul class="flex space-x-8">
                        <li><a href="#home" class="text-gray-700 hover:text-orange-500">Home</a></li>
                        <li><a href="#blog" class="text-gray-700 hover:text-orange-500">Blog</a></li>
                        <li><a href="#about" class="text-gray-700 hover:text-orange-500">About</a></li>
                        @auth
                            <li><a href="{{ route('dashboard') }}" class="text-gray-700 hover:text-orange-500">Dashboard</a></li>
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="text-gray-700 hover:text-orange-500 focus:outline-none">
                                        Logout
                                    </button>
                                </form>
                            </li>
                        @else
                            <li><a href="{{ route('login') }}" class="text-gray-700 hover:text-orange-500">Login</a></li>
                            <div><p>|</p></div>
                            <li><a href="{{ route('register') }}" class="text-gray-700 hover:text-orange-500">Register</a></li>
                        @endauth
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <main>
        <section id="home" class="relative bg-cover bg-center" style="background-image: url('https://source.unsplash.com/1600x900/?food');">
            <div class="bg-black bg-opacity-50">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-32 text-center">
                    <h1 class="text-4xl sm:text-6xl font-bold text-white">Welcome to Delicious Bites</h1>
                    <p class="mt-4 text-xl text-gray-200">Indulge in mouth-watering recipes and culinary adventures</p>
                    <a href="#recipes" class="mt-8 inline-block bg-orange-500 text-white px-6 py-3 rounded hover:bg-orange-600 transition">Discover Recipes</a>
                </div>
            </div>
        </section>

        

        <!-- Blog Section -->
        <section id="blog" class="py-16 bg-gray-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="text-3xl font-bold text-gray-800 mb-8 text-center">Latest from the Blog</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <!-- Blog Post Preview -->
                    <div class="bg-white rounded overflow-hidden shadow hover:shadow-lg transition">
                        <img class="w-full h-48 object-cover" src="https://source.unsplash.com/featured/?baking" alt="Baking Tips">
                        <div class="p-6">
                            <p class="text-sm text-gray-500 mb-1">March 15, 2025 • <span class="text-orange-500">Baking</span></p>
                            <h3 class="text-xl font-bold mb-2 hover:text-orange-500 cursor-pointer">5 Tips for Perfect Baking</h3>
                            <p class="text-gray-700">Discover the secrets to baking like a pro with our top tips and recipes.</p>
                            <a href="#" class="text-orange-500 inline-block mt-4">Read More →</a>
                        </div>
                    </div>

                    <div class="bg-white rounded overflow-hidden shadow hover:shadow-lg transition">
                        <img class="w-full h-48 object-cover" src="https://source.unsplash.com/featured/?baking" alt="Baking Tips">
                        <div class="p-6">
                            <p class="text-sm text-gray-500 mb-1">March 15, 2025 • <span class="text-orange-500">Baking</span></p>
                            <h3 class="text-xl font-bold mb-2 hover:text-orange-500 cursor-pointer">5 Tips for Perfect Baking</h3>
                            <p class="text-gray-700">Discover the secrets to baking like a pro with our top tips and recipes.</p>
                            <a href="#" class="text-orange-500 inline-block mt-4">Read More →</a>
                        </div>
                    </div>

                    <div class="bg-white rounded overflow-hidden shadow hover:shadow-lg transition">
                        <img class="w-full h-48 object-cover" src="https://source.unsplash.com/featured/?baking" alt="Baking Tips">
                        <div class="p-6">
                            <p class="text-sm text-gray-500 mb-1">March 15, 2025 • <span class="text-orange-500">Baking</span></p>
                            <h3 class="text-xl font-bold mb-2 hover:text-orange-500 cursor-pointer">5 Tips for Perfect Baking</h3>
                            <p class="text-gray-700">Discover the secrets to baking like a pro with our top tips and recipes.</p>
                            <a href="#" class="text-orange-500 inline-block mt-4">Read More →</a>
                        </div>
                    </div>

                    <div class="bg-white rounded overflow-hidden shadow hover:shadow-lg transition">
                        <img class="w-full h-48 object-cover" src="https://source.unsplash.com/featured/?baking" alt="Baking Tips">
                        <div class="p-6">
                            <p class="text-sm text-gray-500 mb-1">March 15, 2025 • <span class="text-orange-500">Baking</span></p>
                            <h3 class="text-xl font-bold mb-2 hover:text-orange-500 cursor-pointer">5 Tips for Perfect Baking</h3>
                            <p class="text-gray-700">Discover the secrets to baking like a pro with our top tips and recipes.</p>
                            <a href="#" class="text-orange-500 inline-block mt-4">Read More →</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- About Section -->
        <section id="about" class="py-16 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="text-3xl font-bold text-gray-800 mb-8 text-center">About Delicious Bites</h2>
                <div class="flex flex-col md:flex-row items-center">
                    <img class="w-64 h-64 rounded-full object-cover mb-8 md:mb-0 md:mr-8" src="https://source.unsplash.com/featured/?chef" alt="About">
                    <div>
                        <p class="text-gray-700 text-lg">Delicious Bites is your go-to destination for inspiring and easy-to-follow food recipes. Our passion for cooking drives us to explore new flavors and share our culinary adventures with you. Whether you are a seasoned chef or just starting out, we have something for everyone.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section id="contact" class="py-16 bg-gray-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="text-3xl font-bold text-gray-800 mb-8 text-center">Get in Touch</h2>
                <form class="max-w-lg mx-auto">
                    <div class="mb-4">
                        <label for="name" class="block text-gray-700">Name</label>
                        <input type="text" id="name" name="name" class="w-full border border-gray-300 rounded p-2" placeholder="Your Name">
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block text-gray-700">Email</label>
                        <input type="email" id="email" name="email" class="w-full border border-gray-300 rounded p-2" placeholder="Your Email">
                    </div>
                    <div class="mb-4">
                        <label for="message" class="block text-gray-700">Message</label>
                        <textarea id="message" name="message" rows="4" class="w-full border border-gray-300 rounded p-2" placeholder="Your Message"></textarea>
                    </div>
                    <button type="submit" class="w-full bg-orange-500 text-white px-4 py-2 rounded hover:bg-orange-600">Send Message</button>
                </form>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="bg-white border-t mt-16 py-6">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <p class="text-gray-600">© 2025 Delicious Bites. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
