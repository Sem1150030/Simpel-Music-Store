<?php

namespace App\Livewire\Charts;

use Livewire\Component;

class PieChart extends Component
{
   public $data = [
        'labels' => ['Red', 'Blue', 'Yellow'],
        'values' => [10, 20, 30]
    ];

    public function render()
    {
        return view('livewire.charts.pie-chart');
    }
}
