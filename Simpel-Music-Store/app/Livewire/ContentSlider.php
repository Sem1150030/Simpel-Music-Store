<?php

namespace App\Livewire;

use Livewire\Component;

class ContentSlider extends Component
{



    public $data;
    public $currentPage = 0;
    public $itemsPerPage = 5;

    public function nextPage(){
        if(count($this->data) > ($this->currentPage + 1) * $this->itemsPerPage){
        $this->currentPage++;
        }
    }

    public function prevPage(){
        if($this->currentPage > 0){
        $this->currentPage--;

    }
    }

    public function render()
    {

        $startSlice = $this->currentPage * $this->itemsPerPage;
        $sliderData = $this->data->slice($startSlice, $this->itemsPerPage)->values();
        return view('livewire.content-slider', ['dataList' => $sliderData]);
    }
}
