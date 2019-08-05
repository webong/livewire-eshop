<?php
namespace App\Http\Livewire;

use App\Cart;
use Livewire\Component;

class Item extends Component
{
    public $item;

    public $rowId;

    protected $listeners = [
        'onAddItem'    =>  'itemAdded',
        'onRemoveItem' =>  'itemRemoved',
    ];

    public function mount($item)
    {
        $this->item = $item;   
    }

    public function itemAdded($itemId, $rowId)
    {
        if($itemId == $this->item->id)
        {
            $this->rowId = $rowId;
        }
    }

    public function itemRemoved($itemId)
    {
        if($itemId == $this->item->id)
        {
            $this->rowId = null;
        }
    }
    
    public function render()
    {
        return view('livewire.item');
    }
}
