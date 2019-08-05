<?php

namespace App\Http\Livewire;

use App\Item;
use Livewire\Component;

class Store extends Component
{
    public $items;

    protected $listeners = [
        'filterItems' => 'filterItems',
    ];

    public function mount()
    {
        $this->items = Item::all();
    }

    public function filterItems(float $min, float $pricerange, bool $sale)
    {
        if($sale) {
            $this->items = Item::where('sale', $sale)
                ->when(isset($pricerange), function($query) use ($min,$pricerange) {
                    $query->whereBetween('price', [$min, $pricerange]);
                })
                ->get();
        } else {
            $this->items = Item::whereBetween('price', [$min, $pricerange])
            ->get();
        }

    }

    public function render()
    {
        return view('livewire.store');
    }
}
