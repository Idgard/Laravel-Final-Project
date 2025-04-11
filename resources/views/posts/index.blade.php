<x-app-layout>
    <div class="max-w-4xl mx-auto p-4 sm:p-6 lg:p-8">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold">My Posts</h1>
            <a href="{{ route('posts.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">New Post</a>
        </div>

        @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <div class="space-y-4">
            @foreach($posts as $post)
                <div class="bg-white shadow-sm rounded-lg p-6">
                    <h2 class="text-xl font-semibold">{{ $post->title }}</h2>
                    <p class="mt-2 text-gray-600">{{ Str::limit($post->content, 200) }}</p>
                    <div class="mt-4 flex space-x-2">
                        <a href="{{ route('posts.edit', $post) }}" class="text-blue-500 hover:text-blue-700">Edit</a>
                        <form method="POST" action="{{ route('posts.destroy', $post) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500 hover:text-red-700" 
                                    onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>