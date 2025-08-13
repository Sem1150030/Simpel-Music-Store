<?php

namespace App\Livewire;

use App\Models\Artist;
use Illuminate\Support\Facades\Artisan;
use Livewire\Component;

class ArtistList extends Component
{

    public $artists;

    public function render()
    {
        return view('livewire.artist-list');
    }

    public function mount(){
            $this->artists = Artist::with('albums.musics')->take(10)->get();

    }
}
