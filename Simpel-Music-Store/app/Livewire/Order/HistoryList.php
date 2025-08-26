<?php

namespace App\Livewire\Order;

use App\Models\Order;
use Auth;
use Livewire\Component;

class HistoryList extends Component
{
    public $orders;

    public function mount(){
        $this->orders = Order::where('user_id', Auth::id())->get();
    }
    public function render()
    {
        return view('livewire.order.history-list');
    }
}
