<?php

use App\Http\Controllers\CharactersController;
use App\Http\Controllers\EpisodesController;
use App\Http\Controllers\TitansController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/episodes', [EpisodesController::class, 'index'])->name('episodes');

Route::get('/titans', [TitansController::class, 'index'])->name('titans');

Route::get('/characters', [CharactersController::class, 'index'])->name('characters');

Route::get('/card', 
    function () {
        return view('card');
    }
)->name('card');