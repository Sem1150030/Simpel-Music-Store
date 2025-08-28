<?php

namespace App\Livewire\Backoffice;

use App\Models\Order;
use App\Models\User;
use Carbon\Carbon;
use Livewire\Component;

class Stats extends Component
{
    public $totalOrderCount;
    public $thirtyDaysOrderCount;

    public $totalUsersCount;
    public $thirtyDaysUserCount;

    public function mount(){
        $this->thirtyDaysOrderCount = Order::where('created_at', '>=', Carbon::now()->subDays(30))->count();
        $this->totalOrderCount = Order::count();

        $this->totalUsersCount = User::count();
        $this->thirtyDaysUserCount = User::where('created_at', '>=', Carbon::now()->subDays(30))->count();
    }

    public function render()
    {
        return view('livewire.backoffice.stats');
    }
}
