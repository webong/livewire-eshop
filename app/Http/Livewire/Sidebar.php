<?php
namespace App\Http\Livewire;

use Livewire\Component;

class Sidebar extends Component
{
    public $min = 1000;

    public $max = 10000;

    public $pricerange = 7000;

    public $sale = false;

    public function updated()
    {
        $this->emit('filterItems', (float) $this->min, (float) $this->pricerange, $this->sale);
    }

    public function toggleSale()
    {
        $this->sale = !$this->sale;
        $this->updated();
    }

    public function render()
    {        
        return view('livewire.sidebar');
    }
}
