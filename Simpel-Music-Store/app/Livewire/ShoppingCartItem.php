<?php

namespace App\Livewire;

use App\Models\Album;
use Livewire\Component;

class ShoppingCartItem extends Component
{
    public $item;
    public $quantity;
    public function mount($item){
        $this->item = Album::where('id', $item['album_id'])->first();
        $this->quantity = $item['quantity'];

        $this->dispatch('log', [
        'quantity' => $this->quantity
    ]);
    }

    public function render()
    {
        return view('livewire.shopping-cart-item');
    }
}
