<?php

namespace App\Livewire;

use Livewire\Component;

class NavBar extends Component
{

    public $searchFilter = '';

    public $newDropdown = false;
    public $artistsDropdown = false;
    public $albumsDropdown = false;

    function selectDropdown($dropdownselected){
        if($dropdownselected == 'album'){
            $this->albumDropdown = !$this->albumDropdown;
            $this->artistsDropdown = false;
            $this->newDropdown = false;
        }
        if($dropdownselected == 'artist'){
            $this->artistsDropdown = !$this->artistsDropdown;
            $this->albumDropdown = false;
            $this->newDropdown = false;
        }
        if($dropdownselected == 'new'){
            $this->newDropdown = !$this->newDropdown;
            $this->artistsDropdown = false;
            $this->albumsDropdown = false;
        }
    }


    public function render()
    {
        return view('livewire.nav-bar');
    }
}
