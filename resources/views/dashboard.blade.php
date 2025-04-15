@extends('layouts.app')

@section('content')
  <section class="py-20 bg-gradient-to-b from-gray-50 to-white">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">

      {{-- Dashboard Card --}}
      <div class="bg-white rounded-2xl shadow-xl p-8 sm:p-10 space-y-8">
        <div>
          <h2 class="text-3xl font-extrabold text-gray-800 tracking-tight mb-2">
            {{ __('Welcome Back!') }}
          </h2>
          <p class="text-gray-600 text-lg">
            {{ __("You're logged in to your dashboard.") }}
          </p>
        </div>

        {{-- Quick Access --}}
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
          <div>
            <p class="text-sm text-gray-500">Want to check your content?</p>
            <a 
              href="{{ route('posts.index') }}" 
              class="inline-flex items-center gap-2 mt-2 text-blue-600 font-medium hover:text-blue-800 transition"
            >
              View Your Posts →
            </a>
          </div>

          <a 
            href="{{ route('profile.edit') }}" 
            class="inline-flex items-center justify-center px-6 py-3 bg-indigo-600 text-white rounded-lg text-sm font-medium shadow hover:bg-indigo-500 transition"
          >
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2 -ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
            </svg>
            Go to Settings
          </a>
        </div>

        {{-- Profile Management Info Box --}}
        <div class="bg-gray-50 p-6 rounded-lg border border-gray-200">
          <h3 class="text-lg font-semibold text-gray-700 mb-2">Profile Management</h3>
          <p class="text-sm text-gray-600 leading-relaxed">
            You can update your profile information and password from the settings page. Keeping your profile up-to-date helps us serve you better!
          </p>
        </div>
      </div>

    </div>
  </section>
@endsection
