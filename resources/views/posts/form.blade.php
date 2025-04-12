<div class="space-y-4">
  <div>
    <label class="block text-gray-700">Title</label>
    <input name="title" value="{{ old('title', $post->title) }}"
           class="w-full border rounded p-2" required>
    @error('title')<p class="text-red-600">{{ $message }}</p>@enderror
  </div>
  <div>
    <label class="block text-gray-700">Excerpt</label>
    <textarea name="excerpt"
              class="w-full border rounded p-2">{{ old('excerpt', $post->excerpt) }}</textarea>
    @error('excerpt')<p class="text-red-600">{{ $message }}</p>@enderror
  </div>
  <div>
    <label class="block text-gray-700">Body</label>
    <textarea name="body" rows="8"
              class="w-full border rounded p-2" required>{{ old('body', $post->body) }}</textarea>
    @error('body')<p class="text-red-600">{{ $message }}</p>@enderror
  </div>
  <div>
    <label class="block text-gray-700">Image URL</label>
    <input name="image_url" value="{{ old('image_url', $post->image_url) }}"
           class="w-full border rounded p-2">
    @error('image_url')<p class="text-red-600">{{ $message }}</p>@enderror
  </div>
</div>
