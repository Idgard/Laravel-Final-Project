<header class="bg-white shadow">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex justify-between items-center py-6">
      <a href="{{ route('homepage') }}" class="text-2xl font-bold text-orange-500">Delicious Bites</a>
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
            <li><a href="{{ route('register') }}" class="text-gray-700 hover:text-orange-500">Register</a></li>
          @endauth
        </ul>
      </nav>
    </div>
  </div>
</header>
