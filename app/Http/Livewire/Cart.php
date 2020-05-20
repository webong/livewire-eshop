<?php
namespace App\Http\Livewire;

use Livewire\Component;
use App\Cart as ShoppingCart;
class Cart extends Component
{
    public $cartItems;
    public $cartCount;
    public $cartTotal;

    protected $listeners = [
        'cartUpdated' => 'updated',
        'destroyCart' => 'destroy'
    ];

    protected $casts = [
        'cartItems' => 'collection'
    ];

    protected function setCart()
    {
        $this->cartItems = app('cart')->content();
        $this->cartCount = $this->cartItems->count();
        $this->cartTotal = app('cart')->subtotal();
        $this->emit('setTotalAmount', app('cart')->subtotal(false).'00');
    }

    public function incrementItem($rowId, $qty, ShoppingCart $cart)
    {
        $qty++;
        $cart->update($rowId, $qty);
    }

    public function decrementItem($rowId, $qty, ShoppingCart $cart)
    {
        $qty--;
        $cart->update($rowId, $qty);
        if($qty <= 0)
        {
            $this->emit('itemRemoved', $rowId);
        }
    }

    public function removeItem($rowId, ShoppingCart $cart)
    {
        $cart->remove($rowId);
        $this->emit('itemRemoved', $rowId);
    }

    public function destroy(ShoppingCart $cart)
    {
        $cart->destroy();
        $this->emit('cartDestroyed');
    }
    
    public function updated()
    {
        $this->setCart();
    }

    public function render()
    {
        $this->setCart();

        return view('livewire.cart');
    }
}
