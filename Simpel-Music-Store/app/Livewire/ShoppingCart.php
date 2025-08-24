<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Cookie;
use Livewire\Component;

class ShoppingCart extends Component
{


    public $cart = [];
    public $album_id;

    public function mount(){
        $this->cart = json_decode(Cookie::get('cart', '[]'), true);

    }


    public function render()
    {
        return view('livewire.shopping-cart');
    }
}
