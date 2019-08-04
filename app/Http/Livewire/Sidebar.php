<?php
namespace App\Http\Livewire;

use Livewire\Component;

class Sidebar extends Component
{
    public $min = 500;

    public $max = 10000;

    public $pricerange;

    public $sale = false;

    public function render()
    {
        return view('livewire.sidebar');
    }
}
