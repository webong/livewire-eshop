<?php
namespace App\Http\Livewire;

use App\Cart as ShoppingCart;
use App\Item as ShopItem;
use Livewire\Component;

class Item extends Component
{
    public $item;

    public $rowId;

    protected $listeners = [
        'itemRemoved' => 'removeRowId', 
        'cartDestroyed' => 'updated',
    ];
    
    public function mount(ShopItem $item)
    {
        $this->item = $item;
    }

    public function addToCart(ShoppingCart $cart)
    {
        $item = $this->item;
        $cartItem = $cart->add($item['id'], $item['name'], 1, $item['price'], [
            'img' => $item['img'],
            'article' => $item['article'],
            'category' => $item['category']
        ]);
        $this->rowId = $cartItem->rowId;
        $this->emit("cartUpdated");
    }

    public function removeFromCart($rowId, ShoppingCart $cart)
    {
        $cart->remove($rowId);
        $this->rowId = null;
        $this->emit("cartUpdated");
    }

    public function removeRowId($rowId)
    {
        if(isset($this->rowId) && $this->rowId == $rowId)
        {
            $this->rowId = null;
        }
    }

    public function updated()
    {
        if(!$this->item instanceof ShopItem)
        {
            $this->item = new ShopItem($this->item);
        }
    }

    public function render()
    {
        $item = $this->item;
        $cartItem = app('cart')->search(function ($cartItem) use ($item) {
            return $cartItem->id === $item->id;
        })->first();  
        if (isset($cartItem)) {
            $this->rowId = $cartItem->rowId;
        } else{
            $this->rowId = null;
        }

        return view('livewire.item');
    }
}
