<?php
namespace App\Http\Livewire;

use Livewire\Component;

class Cart extends Component
{
    public $cart;

    public $cartTotal;

    public function render()
    {
        return view('livewire.cart');
    }
}
