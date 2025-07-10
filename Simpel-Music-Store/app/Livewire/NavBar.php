<?php

namespace App\Livewire;

use Livewire\Component;

class NavBar extends Component
{

    public $searchFilter = '';

    public function Search(){

    }

    public function render()
    {
        return view('livewire.nav-bar');
    }
}
