<x-app-layout>
    <div class="max-w-4xl mx-auto p-4 sm:p-6 lg:p-8">
        <h1 class="text-2xl font-bold mb-6">Create New Post</h1>
        <form method="POST" action="{{ route('posts.store') }}">
            @csrf
            @include('posts._form')
        </form>
    </div>
</x-app-layout>