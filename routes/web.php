<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClubController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\PitchController;
use App\Http\Controllers\UmpireController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/secret' ,function (){
    return "secret";
}) -> middleware(['auth']);

Route::get('/food', function(){
    return view('food');
});

// Route::get('/clubs/{player?}', function($player = null) {
//     return view('club', ['player' => $player]);
// });

Route::get('/clubs', [ClubController::class, 'index']);

Route::get('/players', [PlayerController::class, 'index']);

Route::get('/pitches', [PitchController::class, 'index']);

Route::get('/umpires', [UmpireController::class, 'index']);

Route::get('/clubs/{id}', [ClubController::class, 'show']) -> name('clubs.show');

Route::get('/players/{id}', [PlayerController::class, 'show']) -> name('players.show');

Route::get('/pitches/{id}', [PitchController::class, 'show']) -> name('pitches.show');

Route::get('/umpires/{id}', [UmpireController::class, 'show']) -> name('umpires.show');

require __DIR__.'/auth.php';