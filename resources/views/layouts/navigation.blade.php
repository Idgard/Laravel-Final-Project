<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                    @auth <!-- Add Posts link for authenticated users -->
                    <x-nav-link :href="route('posts.index')" :active="request()->routeIs('posts.*')">
                        {{ __('Posts') }}
                    </x-nav-link>
                    <a href="{{ route('welcome') }}">Homepage</a>   
                    @endauth
                </div>
            </div>

            <!-- Settings Dropdown -->
            <!-- ... (keep existing settings dropdown code unchanged) ... -->
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
            @auth <!-- Add mobile Posts link -->
            <x-responsive-nav-link :href="route('posts.index')" :active="request()->routeIs('posts.*')">
                {{ __('Posts') }}
            </x-responsive-nav-link>
            @endauth
        </div>

        <!-- ... (keep existing responsive settings code unchanged) ... -->
    </div>
</nav>