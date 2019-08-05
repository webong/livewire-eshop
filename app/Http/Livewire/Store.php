<?php

namespace App\Http\Livewire;

use App\Item;
use Livewire\Component;

class Store extends Component
{
    public $items;

    public function mount()
    {
        $this->items = Item::all();
    }

    public function render()
    {
        return view('livewire.store');
    }
}
