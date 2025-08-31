<?php

namespace App\Livewire\Backoffice\Users;

use App\Models\Order;
use App\Models\Review;
use Livewire\Component;

class UserStats extends Component
{
    public $user;
    public $orders = [];
    public $totalRevenue;
    public $reviews = [];



    public function mount($user){
       $this->user = $user;
       $this->orders = Order::where('user_id', $user->id)->get();
       $this->revenueGenerated($this->orders);
       $this->getReviews();
    }

    public function revenueGenerated($orders){
        $this->totalRevenue = 0;
        if($orders){
            foreach($orders as $order){
                $this->totalRevenue += $order->Subtotal;
            }
        }
        return $this->totalRevenue;
    }

    public function getReviews(){
        $this->reviews = Review::where('user_id', $this->user->id)->get();
    }

    public function render()
    {
        return view('livewire.backoffice.users.user-stats');
    }
}
