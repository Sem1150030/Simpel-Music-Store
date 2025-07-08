<?php

namespace App\Livewire;

use App\Models\Artist;
use Illuminate\Support\Facades\Artisan;
use Livewire\Component;

class MusicList extends Component
{

    public $artists;

    public function render()
    {
        return view('livewire.music-list');
    }

    public function mount(){
            $this->artists = Artist::with('albums.musics')->get();

    }
}
