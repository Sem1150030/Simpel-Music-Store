<?php

use App\Http\Controllers\albumController;
use App\Models\Artist;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $artist = Artist::with('albums.musics')->get();

    return view('home', ['$artist' => $artist]);
});

Route::get('/albums', [albumController::class, 'index']);
