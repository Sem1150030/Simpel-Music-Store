<?php

use App\Models\Artist;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $artist = Artist::with('albums.musics')->get();

    return view('app', ['$artist' => $artist]);
});
