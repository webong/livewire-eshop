<?php
namespace App\Http\Livewire;

use App\Cart as ShoppingCart;
use Livewire\Component;
class Cart extends Component
{
    public $cartItems;
    public $cartTotal;

    protected $listeners = [
        'addItem' => 'add',
        'removeItem' => 'remove',
    ];

    public function mount(ShoppingCart $cart)
    {
        $this->cartItems = $cart->content();
    }

    public function add($item, ShoppingCart $cart)
    {
        $item = json_decode($item);
        $cartItem = $cart->add($item->id, $item->name, 1, $item->price, [
            'img' => $item->img,
            'article' => $item->article,
            'category' => $item->category
        ]);
        $this->emit('onAddItem', $item->id, $cartItem->rowId);
    }
    
    public function remove($item, $rowId, ShoppingCart $cart)
    {
        $cart->remove($rowId);
        $this->emit('onAddItem', $item->id);
    }

    public function updated()
    {
        // $this->cartItems = $this->cart->content();
    }

    public function render()
    {
        return view('livewire.cart');
    }
}
