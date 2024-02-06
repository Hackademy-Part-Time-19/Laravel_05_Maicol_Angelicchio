<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimeController;


Route::get('/', [AnimeController::class, 'index'])->name('generi');

Route::get('/{id}', [AnimeController::class, 'animeByGenre'])->name('anime');
