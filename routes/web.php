<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\ProfileController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

// Homepage
Route::get('/', [HomepageController::class, 'index'])
     ->name('homepage');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/blogs', function () {
    $posts = Post::latest()->get();
    return view('blogs', compact('posts'));
})->name('blogs');
    
// Public: list & readmore for public users
Route::get('posts', [PostController::class, 'index'])
     ->name('posts.index');
Route::get('posts/{post}/read', [PostController::class, 'show'])
     ->name('posts.readmore');

// Protected: everything else
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', fn() => view('dashboard'))
         ->name('dashboard');

    // Posts create/edit/delete/show routes for authenticated users
    // Specific routes first

    Route::get('posts/create', [PostController::class, 'create'])
         ->name('posts.create');
    Route::post('posts', [PostController::class, 'store'])
         ->name('posts.store');
    Route::get('posts/show/{post}', [PostController::class, 'show'])
         ->name('posts.show');
    Route::get('posts/{post}/edit', [PostController::class, 'edit'])
         ->name('posts.edit');
    Route::patch('posts/{post}', [PostController::class, 'update'])
         ->name('posts.update');
    Route::delete('posts/{post}', [PostController::class, 'destroy'])
         ->name('posts.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])
         ->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])
         ->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])
         ->name('profile.destroy');
});

require __DIR__.'/auth.php';