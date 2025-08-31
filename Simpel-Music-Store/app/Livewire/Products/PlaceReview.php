<?php

namespace App\Livewire\Products;

use Livewire\Component;

class PlaceReview extends Component
{
    public $toggleReview = false;
    public $rating = 3;

    public function toggle(){
        $this->toggleReview = !$this->toggleReview;
    }

    public function render()
    {
        return view('livewire.products.place-review');
    }
}
