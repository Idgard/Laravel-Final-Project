@extends('layouts.app')

@section('content')
    <main class="py-16 bg-gray-50 text-gray-800">
        <div class="max-w-5xl mx-auto px-4">
            <h1 class="text-4xl font-bold text-center text-orange-500 mb-6">About Us</h1>
            <p class="text-lg text-center mb-12 max-w-3xl mx-auto">
                Welcome to <span class="font-semibold text-orange-500">Delicious Bites</span> – your ultimate online destination for everything tasty and homemade. Our mission is simple: to share delicious, easy-to-make recipes that inspire you to cook more and savor every bite.
            </p>

            <div class="grid md:grid-cols-2 gap-12 items-center">
                <img src="https://source.unsplash.com/featured/?food,chef" alt="Cooking Team" class="rounded-lg shadow-md">
                <div>
                    <h2 class="text-2xl font-bold mb-4">Our Story</h2>
                    <p class="mb-4">
                        What started as a personal recipe journal has grown into a vibrant community of food lovers from around the world. At Delicious Bites, we believe food brings people together. Every dish has a story, and we’re here to tell it.
                    </p>
                    <p>
                        From family traditions to new flavor explorations, we’re passionate about sharing meals that are not only mouth-watering but meaningful. Whether you're a beginner in the kitchen or a seasoned home cook, we’re excited to cook with you!
                    </p>
                </div>
            </div>

            <div class="mt-16">
                <h2 class="text-2xl font-bold mb-4 text-center">What We Offer</h2>
                <ul class="list-disc list-inside space-y-2 max-w-xl mx-auto text-lg">
                    <li>Step-by-step recipes for everyday meals</li>
                    <li>Tips and tricks for better cooking and baking</li>
                    <li>Seasonal and holiday-inspired menus</li>
                    <li>Ingredient guides and food pairings</li>
                    <li>Interactive blog posts and community discussions</li>
                </ul>
            </div>

            <div class="mt-16 text-center">
                <h2 class="text-2xl font-bold mb-4">Let’s Stay Connected</h2>
                <p class="mb-4 text-lg">We love hearing from you! Whether it's a question, suggestion, or your own kitchen success story, don’t hesitate to reach out.</p>
            </div>
        </div>
    </main>
@endsection
