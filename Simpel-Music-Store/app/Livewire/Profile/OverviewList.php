<?php

namespace App\Livewire\Profile;

use Auth;
use Livewire\Component;

class OverviewList extends Component
{

    public $user;

    public function mount(){
        $this->user = Auth::user();
    }



    public function render()
    {
        return view('livewire.profile.overview-list');
    }
}
