<?php

use App\Http\Controllers\EpisodesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/episodes', [EpisodesController::class, 'index'])->name('episodes');