<?php

namespace App\Livewire;

use App\Models\Album;
use Livewire\Component;

class AlbumList extends Component
{

    public $albums;
    public function render()
    {
        return view('livewire.album-list');
    }

    public function mount(){
        $this->albums = Album::with('genre')->get();
    }
}
