<?php

namespace App\Livewire\Cart;

use App\Models\Album;
use Livewire\Component;

class CartOrderSummary extends Component
{
    public $cart;
    public $albums;
    public $totalCostBT = 0;

    public $totalTaxCost = 0;
    public $totalCost = 0;
    public $shippingCost = 0;

    public function mount($cart){
        $this->cart = $cart;
        $albumids = array_column($this->cart, 'album_id');
        $this->albums = Album::whereIn('id', $albumids)->get();
        $this->calculateTotalCost();
    }

    public function calculateTotalCost(){
        $this->totalCostBT = 0;
        foreach($this->cart as $item){
            $album = $this->albums->firstwhere('id', $item['album_id']);
            $this->totalCostBT += ($album->price * $item['quantity']);
        }
        if($this->totalCostBT > 0 ){
            $this->shippingCost = 7.95;
        }

        $this->totalTaxCost = round($this->totalCostBT * 0.21, 2);
        $this->totalCost = ($this->totalCostBT + $this->totalTaxCost + $this->shippingCost);

    }
    public function render()
    {
        return view('livewire.cart.cart-order-summary');
    }


}
