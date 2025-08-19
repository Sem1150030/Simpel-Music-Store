<?php

use App\Http\Controllers\albumController;
use App\Http\Controllers\artistController;
use App\Http\Controllers\authController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\searchController;
use App\Models\Artist;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $artist = Artist::with('albums.musics')->get();

    return view('home', ['$artist' => $artist]);
})->name('site.home');

Route::get('/albums', [albumController::class, 'index']);

Route::get('/albums/{id}', [albumController::class, 'show'])->name('album.show');

Route::get('/search', [searchController::class, 'index'])->name('search.index');

Route::get('/auth/login', [authController::class, 'login'])->name('auth.login');

Route::get('/auth/register', [authController::class, 'register'])->name('auth.register');

Route::post('/auth/login', loginController::class)->name('login.attempt');

Route::post('/auth/register', registerController::class)->name('register.attempt');

Route::get('/auth/logout', [authController::class, 'logout'])->name('logout.attempt');

Route::get('/artist/{id}', [artistController::class, 'show'])->name('artist.show');

Route::get('/orders/cart', [OrderController::class, 'cart'])->name('orders.cart');
