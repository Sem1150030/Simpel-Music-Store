<?php

namespace App\Livewire\Backoffice\Users;

use Livewire\Component;

class UserDetails extends Component
{
    public $user;
    public function mount($user){
        $this->user = $user;
    }
    public function render()
    {
        return view('livewire.backoffice.users.user-details');
    }
}
