@extends('layouts.app')

@section('content')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight mb-4">
                        {{ __('Dashboard') }}
                    </h2>

                    {{ __("You're logged in!") }}

                    <div class="mt-4">
                        <a href="{{ route('posts.index') }}" class="text-blue-600 hover:text-blue-900">
                            View Your Posts →
                        </a>
                    </div>

                    <div class="bg-white p-6 rounded-lg shadow mt-6">
                        <h2 class="text-lg font-semibold mb-2">Profile Management</h2>
                        <p class="text-sm text-gray-600 mb-4">
                            Manage your profile settings including your info and password.
                        </p>
                        <a href="{{ route('profile.edit') }}" class="inline-block px-4 py-2 bg-indigo-600 text-white text-sm font-medium rounded hover:bg-indigo-500">
                            Go to Settings
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
