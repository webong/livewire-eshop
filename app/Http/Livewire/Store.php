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
    protected $category = [
        'women', 'men', 'sale'
    ];

    public function mount($category = null)
    {
        switch ($category) {
            case null:
                $this->items = Item::all();
                break;
            case 'men':
            case 'women':
                $this->items = Item::where('category', $category);
                break;
            case 'sale':
                $this->items =Item::where('sale', true)->get();
            default:
                return abort(404);
                break;
        }
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
