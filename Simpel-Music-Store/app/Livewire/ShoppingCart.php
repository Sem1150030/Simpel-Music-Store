<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Cookie;
use Livewire\Component;

class ShoppingCart extends Component
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

    public function removeFromCart($album_id){
        $i = 0;
        foreach($this->cart as $item){

            if($item['album_id'] == $album_id && $item['quantity'] > 1){
                $this->cart[$i]['quantity'] -= 1;
                break;
            }
            elseif($item['album_id'] == $album_id && $item['quantity'] == 1){
                unset($this->cart[$i]);
                $this->cart = array_values($this->cart);
                break;
            }
            $i++;
        }
    }

    public function render()
    {
        return view('livewire.shopping-cart');
    }
}
