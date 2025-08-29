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
       $this->revenueGenerated();
       $this->getReviews();
    }

    public function revenueGenerated(){
        $this->totalRevenue = 0;
        if($this->orders){
            foreach($this->orders as $order){
                $this->totalRevenue += $order->Subtotal;
            }
        }
    }

    public function getReviews(){
        $this->reviews = Review::where('user_id', $this->user->id)->get();
    }

    public function render()
    {
        return view('livewire.backoffice.users.user-stats');
    }
}
