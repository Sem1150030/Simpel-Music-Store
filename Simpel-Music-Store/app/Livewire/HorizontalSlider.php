<?php

namespace App\Livewire;

use Livewire\Component;

class HorizontalSlider extends Component
{
    //object: Same requirements as the Card
    public $data;

    public function render()
    {
        return view('livewire.horizontal-slider');
    }
}
