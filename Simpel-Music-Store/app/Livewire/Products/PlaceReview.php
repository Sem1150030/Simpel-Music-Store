<?php

namespace App\Livewire\Products;

use Livewire\Component;

class PlaceReview extends Component
{
    public $toggleReview = false;
    public $rating = 3;

    public $album;

    public function toggle(){
        $this->toggleReview = !$this->toggleReview;
    }

    public function mount($album){
        $this->album = $album;
    }

    public function render()
    {
        return view('livewire.products.place-review');
    }
}
