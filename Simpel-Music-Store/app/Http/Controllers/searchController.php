<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Artist;
use App\Models\Music;
use Illuminate\Http\Request;

class searchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $artists = Artist::where('name', 'like', '%' . $request->query('search') . '%')->get();
        $albums = Album::where('name', 'like', '%' . $request->query('search') . '%')->orderBy('release_date')->get();
        $musics = Music::where('name', 'like', '%' . $request->query('search') . '%')->orderBy('release_date')->get();

        return view('show', ['artists' => $artists, 'albums' => $albums, 'musics' => $musics]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
