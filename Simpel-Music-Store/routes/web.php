<?php

use App\Http\Controllers\albumController;
use App\Http\Controllers\artistController;
use App\Http\Controllers\authController;
use App\Http\Controllers\BackofficeController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\profileController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\searchController;
use App\Models\Artist;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\Profiler\Profile;

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

Route::post('/orders', [OrderController::class, 'store'])->name('orders.store');

Route::middleware(['auth'])->group(function () {
    Route::get('/profile/overview', [profileController::class, 'overview'])->name('profile.overview');
    Route::get('/profile/orders', [OrderController::class, 'index']);

    Route::middleware('can:acces-admin')->group(function (){
        Route::get('/backoffice/overview', [BackofficeController::class, 'overview'])->name('backoffice.overview');
        Route::get('/backoffice/users', [BackofficeController::class, 'users'])->name('backoffice.users');
        Route::get('/backoffice/users/{id}', [BackofficeController::class, 'showUser'])->name('backoffice.users.show');
        Route::put('/backoffice/users/role/{id}', [profileController::class, 'changeUserRole'])->name('profile.changerole');
    });
});
