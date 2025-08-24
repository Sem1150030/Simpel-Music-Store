<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Cookie;
use Livewire\Component;
use Route;

class AddToShoppingCart extends Component
{
    public $cart = [];
    public $album_id; // this will be passed when mounting the component

    public function mount($album_id)
    {
        $this->album_id = $album_id;
        $this->cart = json_decode(Cookie::get('cart', '[]'), true);
    }

    public function addToCart()
    {
        // Use $this->album_id from the component property
        $album_id = $this->album_id;

        $found = false;
        foreach ($this->cart as $i => $item) {
            if ($item['album_id'] == $album_id) {
                $this->cart[$i]['quantity'] += 1;
                $found = true;
                break;
            }
        }

        if (!$found) {
            $this->cart[] = [
                'album_id' => $album_id,
                'quantity' => 1,
            ];
        }

        Cookie::queue('cart', json_encode($this->cart), 60 * 24 * 7);
        $this->dispatch('cartUpdated');
        return redirect(Route('orders.cart'));
    }

    public function render()
    {
        return view('livewire.add-to-shopping-cart');
    }
}
