<?php

namespace App\Livewire\Products;

use App\Models\User;
use Livewire\Component;

class AlbumReviews extends Component
{
    public $album;
    public function mount($album){
        $this->album = $album;

    }
    public function render()
    {
        return view('livewire.products.album-reviews');
    }
}
