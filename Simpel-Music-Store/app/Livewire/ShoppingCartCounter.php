<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Cookie;
use Livewire\Attributes\On;
use Livewire\Component;

class ShoppingCartCounter extends Component
{
    public $cart = [];
    public $count = 0;

    public function mount(){
        $this->cart = json_decode(Cookie::get('cart', '[]'), true);
        $this->calculateCount();
    }

    #[On('cartUpdated')]
    public function updateCount(){
        $this->cart = json_decode(Cookie::get('cart', '[]'), true);
        $this->calculateCount();
    }
    public function calculateCount(){

        $this->count = 0;
        if(!empty($this->cart)){
            foreach($this->cart as $item){
                $this->count += $item['quantity'];
            }
        }
    }


    public function render()
    {
        return view('livewire.shopping-cart-counter');
    }
}
