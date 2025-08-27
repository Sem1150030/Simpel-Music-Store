<?php

namespace App\Livewire\Profile;

use Auth;
use Livewire\Component;

class OverviewList extends Component
{

    public $user;
    public $role;

    public function mount(){
        $this->user = Auth::user();
        $this->role = $this->user->role;

    }



    public function render()
    {
        return view('livewire.profile.overview-list');
    }
}
