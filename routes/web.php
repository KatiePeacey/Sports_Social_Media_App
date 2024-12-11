<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\PitchController;
use App\Http\Controllers\UmpireController;
use App\Http\Controllers\PostController;
use App\Livewire\Counter;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified', 'player'])->name('dashboard');

Route::get('/coach', function () {
    return view('coach');
})->middleware(['auth', 'verified', 'coach'])->name('coach');

Route::get('/manager', function () {
    return view('manager');
})->middleware(['auth', 'verified', 'manager'])->name('manager');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route::get('/clubs/{player?}', function($player = null) {
//     return view('club', ['player' => $player]);
// });
 
Route::get('/counter', Counter::class);

Route::get('/players', [PlayerController::class, 'index']) ->name('players.index');
Route::get('/players/{id}', [PlayerController::class, 'show']) -> name('players.show');

Route::get('/posts', [PostController::class, 'index']) ->name('posts.index');
Route::get('/posts/create', [PostController::class, 'create']) -> name('posts.create') -> middleware(['auth']);
Route::post('/posts', [PostController::class, 'store']) -> name('posts.store');
//Route::get('/players/{id}', [PlayerController::class, 'show']) -> name('players.show');
Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');
Route::delete('/posts/{id}', [PostController::class, 'destroy']) -> name('posts.destroy') -> middleware(['auth']);

Route::get('/pitches', [PitchController::class, 'index']) ->name('pitches.index');
Route::get('/pitches/{id}', [PitchController::class, 'show']) -> name('pitches.show');

Route::get('/umpires', [UmpireController::class, 'index']) ->name('umpires.index');
Route::get('/umpires/{id}', [UmpireController::class, 'show']) -> name('umpires.show');

require __DIR__.'/auth.php';