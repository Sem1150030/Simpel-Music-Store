<?php

namespace App\Livewire;

use App\Models\Album;
use Illuminate\Support\Facades\Cookie;
use Livewire\Attributes\On;
use Livewire\Component;

class ShoppingCartItem extends Component
{
    public $item;
    public $cart;
    public $quantity;

    public function mount($item, $cart){
        $this->item = Album::where('id', $item['album_id'])->first();
        $this->quantity = $item['quantity'];
        $this->cart = json_decode(Cookie::get('cart', '[]'), true);
        $this->dispatch('log', [
            'quantity' => $this->quantity
        ]);
    }

    public function updatedQuantity($value){

        $this->updateCart($value);
    }

    #[On('cartUpdated')]
    public function updatedCart(){
        $this->cart = json_decode(Cookie::get('cart', '[]'), true);
    }


    public function updateCart($quantity){
        $i = 0;
        foreach($this->cart as $cartItem){

            if($cartItem['album_id'] == $this->item['id'] && $cartItem['quantity'] >= 1){
                $this->cart[$i]['quantity'] = (int) $quantity;
                Cookie::queue('cart', json_encode($this->cart), 60 * 24 * 7);

                $this->dispatch('cartUpdated');

                break;
            }
            elseif($cartItem['album_id'] == $this->item['album_id'] && $quantity == 0){
                unset($this->cart[$i]);
                $this->cart = array_values($this->cart);
                Cookie::queue('cart', json_encode($this->cart), 60 * 24 * 7);

                $this->dispatch('cartUpdated');
                $this->dispatch('cartItemEmpty');

                break;
            }

            $i++;

        }

    }

    public function render()
    {
        return view('livewire.shopping-cart-item');
    }
}
