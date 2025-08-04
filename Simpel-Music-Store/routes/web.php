<?php

use App\Http\Controllers\albumController;
use App\Http\Controllers\authController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\searchController;
use App\Models\Artist;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $artist = Artist::with('albums.musics')->get();

    return view('home', ['$artist' => $artist]);
});

Route::get('/albums', [albumController::class, 'index']);

Route::get('/search', [searchController::class, 'index'])->name('search.index');

Route::get('/auth/login', [authController::class, 'login'])->name('auth.login');

Route::get('/auth/register', [authController::class, 'register'])->name('auth.register');

Route::post('/auth/login', loginController::class)->name('login.attempt');

Route::post('/auth/register', registerController::class)->name('register.attempt');


