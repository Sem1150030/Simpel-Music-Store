<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Cookie;
use Livewire\Component;
use Livewire\Livewire;

class AddToShoppingCart extends Component
{
    public $cart = [];
    public $album_id;

    public function mount($album_id){
        $this->cart = json_decode(Cookie::get('cart', '[]'), true);
        $this->album_id = $album_id;
    }

    public function addToCart(){
        $found = false;
        $i = 0;
        foreach($this->cart as $item){
            if($item['album_id'] == $this->album_id){
                $this->cart[$i]['quantity'] += 1;
                $found = true;
                $this->dispatch('cartUpdated');
                break;

            }
            $i++;
        }
        if(!$found){
            $this->cart[] = [
                'album_id' => $this->album_id,
                'quantity' => 1

            ];
                $this->dispatch('cartUpdated');

        }
        Cookie::queue('cart', json_encode($this->cart), 60 * 24 * 7);


    }
    public function render()
    {
        return view('livewire.add-to-shopping-cart');
    }
}
