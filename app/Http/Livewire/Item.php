<?php
namespace App\Http\Livewire;

use Livewire\Component;

class Item extends Component
{
    public $item;

    public function mount($item)
    {
        $this->item = $item;   
    }

    public function addItem()
    {

    }
    
    public function removeItem()
    {

    }
    
    public function render()
    {
        return view('livewire.item');
    }
}
