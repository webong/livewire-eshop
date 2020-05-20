<?php

namespace App\Http\Livewire;

use App\Item;
use Livewire\Component;

class Store extends Component
{
    public $items;

    public $category;

    protected $listeners = [
        'filterItems' => 'filterItems',
    ];

    public function mount($category = null)
    {
        switch ($category) {
            case null:
                $this->category = $category;
                $this->items = Item::all();
                break;
            case 'men':
            case 'women':
                $this->category = $category;
                $this->items = Item::where('category', $category)->get();
                break;
            case 'sale':
                $this->items = Item::where('sale', true)->get();
                break;
            default:
                return abort(404);
                break;
        }
    }

    public function filterItems(float $min, float $pricerange, bool $sale)
    {
        $this->sale = $sale;
        $category = $this->category;
        
        if($sale) {
            $this->items = Item::where('sale', $sale)
                ->when(isset($category), function($query) use ($category) {
                    $query->where('category', $category);
                })
                ->when(isset($pricerange), function($query) use ($min,$pricerange) {
                    $query->whereBetween('price', [$min, $pricerange]);
                })
                ->get();
        } else {
            $this->items = Item::whereBetween('price', [$min, $pricerange])
                ->when(isset($category), function($query) use ($category) {
                    $query->where('category', $category);
                })
                ->get();
        }
    }

    public function render()
    {
        return view('livewire.store');
    }
}
