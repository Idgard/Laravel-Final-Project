<header x-data="{ open: false }" class="bg-white shadow">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex justify-between items-center py-6">
      <a href="{{ route('homepage') }}" class="text-2xl font-bold text-orange-500">The Daily Crave</a>

      <!-- Hamburger button (mobile) -->
      <div class="md:hidden">
        <button @click="open = !open" class="text-gray-700 focus:outline-none">
          <svg x-show="!open" class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2"
            viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
            <path d="M4 6h16M4 12h16M4 18h16"/>
          </svg>
          <svg x-show="open" x-cloak class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2"
            viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
            <path d="M6 18L18 6M6 6l12 12"/>
          </svg>
        </button>
      </div>

      <!-- Desktop Nav -->
      <nav class="hidden md:block">
        <ul class="flex space-x-8">
          <li><a href="{{ route('homepage') }}" class="text-gray-700 hover:text-orange-500">Home</a></li>
          <li><a href="{{ route('blogs') }}" class="text-gray-700 hover:text-orange-500">Blog</a></li>
          <li><a href="{{ route('about') }}" class="text-gray-700 hover:text-orange-500">About</a></li>
          @auth
            <li><a href="{{ route('dashboard') }}" class="text-gray-700 hover:text-orange-500">Dashboard</a></li>
            <li>
              <form method="POST" action="{{ route('logout') }}">
                  @csrf
                  <button type="submit" class="text-gray-700 hover:text-orange-500 focus:outline-none">Logout</button>
              </form>
            </li>
          @else
            <li><a href="{{ route('login') }}" class="text-gray-700 hover:text-orange-500">Login</a></li>
            <li><a href="{{ route('register') }}" class="text-gray-700 hover:text-orange-500">Register</a></li>
          @endauth
        </ul>
      </nav>
    </div>

    <!-- Mobile Nav -->
    <nav x-show="open" x-cloak class="md:hidden">
      <ul class="flex flex-col space-y-4 pb-4">
        <li><a href="{{ route('homepage') }}" class="text-gray-700 hover:text-orange-500">Home</a></li>
        <li><a href="{{ route('blogs') }}" class="text-gray-700 hover:text-orange-500">Blog</a></li>
        <li><a href="{{ route('about') }}" class="text-gray-700 hover:text-orange-500">About</a></li>
        @auth
          <li><a href="{{ route('dashboard') }}" class="text-gray-700 hover:text-orange-500">Dashboard</a></li>
          <li>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="text-gray-700 hover:text-orange-500 focus:outline-none">Logout</button>
            </form>
          </li>
        @else
          <li><a href="{{ route('login') }}" class="text-gray-700 hover:text-orange-500">Login</a></li>
          <li><a href="{{ route('register') }}" class="text-gray-700 hover:text-orange-500">Register</a></li>
        @endauth
      </ul>
    </nav>
  </div>
</header>
