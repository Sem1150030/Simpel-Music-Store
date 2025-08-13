<?php

namespace App\Livewire;

use Livewire\Component;

class Card extends Component
{
    public $data;
    public $type;

    public function mount($data){
        $this->data = $data;
        if($this->data->bio){
            $this->type = 'Artist';
        }
        elseif($this->data->duraction_sec){
            $this->type = 'Music';
        }
        else{
            $this->type = 'Album';
        }

    }

    public function render()
    {
        return view('livewire.card');
    }
}
