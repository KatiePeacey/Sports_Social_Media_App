<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\PitchController;
use App\Http\Controllers\UmpireController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ClubController;
use App\Http\Controllers\CommentController;
use App\Livewire\Counter;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified', 'player'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

 
Route::get('/counter', Counter::class);

Route::get('/players', [PlayerController::class, 'index']) ->name('players.index');
Route::get('/players/{id}', [PlayerController::class, 'show']) -> name('players.show');

Route::get('/clubs', [ClubController::class, 'index']) ->name('clubs.index');
Route::get('/clubs/create', [ClubController::class, 'create']) -> name('clubs.create') -> middleware(['auth']);
Route::post('/clubs', [ClubController::class, 'store']) -> name('clubs.store');
Route::get('/clubs/{id}', [ClubController::class, 'show']) -> name('clubs.show');
Route::get('/clubs/{id}/edit', [ClubController::class, 'edit'])->name('clubs.edit');
Route::put('/clubs/{id}', [ClubController::class, 'update'])->name('clubs.update');
Route::delete('/clubs/{id}', [ClubController::class, 'destroy']) -> name('clubs.destroy') -> middleware(['auth']);

Route::get('/posts', [PostController::class, 'index']) ->name('posts.index');
Route::get('/posts/create', [PostController::class, 'create']) -> name('posts.create') -> middleware(['auth']);
Route::post('/posts', [PostController::class, 'store']) -> name('posts.store');
Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');
Route::delete('/posts/{id}', [PostController::class, 'destroy']) -> name('posts.destroy') -> middleware(['auth']);
Route::get('/posts/{Post}/edit', [PostController::class, 'edit'])->name('posts.edit') -> middleware(['auth']);
Route::put('/posts/{Post}', [PostController::class, 'update'])->name('posts.update');


Route::get('/pitches', [PitchController::class, 'index']) ->name('pitches.index');
Route::get('/pitches/{id}', [PitchController::class, 'show']) -> name('pitches.show');

Route::get('/posts/{post}/comments/create', [CommentController::class, 'create'])->name('comments.create') -> middleware(['auth']);
Route::post('/posts/{post}/comments', [CommentController::class, 'store'])->name('comments.store');
Route::delete('/comments/{comment}', [CommentController::class, 'destroy'])->name('comments.destroy') -> middleware(['auth']);
Route::get('/comments/{comment}/edit', [CommentController::class, 'edit'])->name('comments.edit') -> middleware(['auth']);
Route::put('/comments/{comment}', [CommentController::class, 'update'])->name('comments.update');

require __DIR__.'/auth.php';