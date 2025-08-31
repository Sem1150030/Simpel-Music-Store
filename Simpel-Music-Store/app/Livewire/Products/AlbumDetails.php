<?php

namespace App\Livewire\Products;

use Livewire\Component;

class AlbumDetails extends Component
{
    public $album;
     public $description;
    public $limit = 800; // default char limit
    public $expanded = false;

    public function toggle()
    {
        $this->expanded = ! $this->expanded;
    }

    public function mount($album){
        $this->album = $album;
        $this->description = $album->description;
    }
    public function render()
    {
        return view('livewire.products.album-details');
    }
}
