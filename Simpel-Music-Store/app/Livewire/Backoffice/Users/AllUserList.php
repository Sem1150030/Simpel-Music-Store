<?php

namespace App\Livewire\Backoffice\Users;

use App\Models\User;
use Livewire\Component;

class AllUserList extends Component
{
    public $users;
    public function mount(){
        $this->users = User::get();
    }
    public function render()
    {
        return view('livewire.backoffice.users.all-user-list');
    }
}
