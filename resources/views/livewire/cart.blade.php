<div class="cart-dropdown">
    <div v-if="cartTotal > 0" class="cartcount"> {{ $cartCount }} </div>
    <svg class="cart-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" aria-labelledby="shopicon"
        role="presentation" width="30" height="30">
        <title id="cart">
            Shopping Cart
        </title>
        <path fill="black"
            d="M8.01 10c-1.104 0-2 .896-2 2 0 1.105.896 2 2 2h10.376l10.53 49.813c-.107 1.14.952 2.245 2.095 2.187h50c1.057.015 2.03-.943 2.03-2s-.973-2.015-2.03-2H32.637l-1.688-8H85.01c.896-.01 1.742-.69 1.938-1.562l7-30c.26-1.16-.748-2.43-1.937-2.438H23.76l-1.78-8.437c-.2-.884-1.063-1.57-1.97-1.563zm16.594 14H89.51l-6.093 26H30.104zM42.01 72c-4.946 0-9 4.053-9 9s4.054 9 9 9c4.948 0 9-4.053 9-9s-4.052-9-9-9zm28 0c-4.946 0-9 4.053-9 9s4.054 9 9 9c4.948 0 9-4.053 9-9s-4.052-9-9-9zm-28 4c2.786 0 5 2.215 5 5s-2.214 5-5 5c-2.784 0-5-2.215-5-5s2.216-5 5-5zm28 0c2.786 0 5 2.215 5 5s-2.214 5-5 5c-2.784 0-5-2.215-5-5s2.216-5 5-5z">
        </path>
    </svg>
    @if($cartCount > 0)
    <div class="cart-content">
        <div class="shopping-cart">
            <!-- Head -->
            <div class="header">
              Total: ₦{{ $cartTotal }}
              <button onclick="payWithPaystack()" class="checkout">Checkout</button>
            </div>
          
            <!-- Product #1 -->
            @foreach($cartItems as $item)
            <div class="cart-item">
                    <div class="buttons">
                        <span wire:click="removeItem('{{ $item->rowId }}')" class="delete-btn"></span>
                        {{-- <span class="like-btn"></span> --}}
                    </div>
                
                    <div class="image">
                        <img src="{{url($item->options->img)}}" alt="" />
                    </div>
                
                    <div class="description">
                        <span>{{ $item->name }}</span>
                        <span>{{ $item->options->article }}</span>
                        <span>{{ $item->options->category}}</span>
                    </div>
                
                    <div class="quantity">
                        <button class="plus-btn" wire:click="incrementItem('{{$item->rowId}}', {{$item->qty}})" type="button" name="button">
                        <img src="plus.svg" alt="" />
                        </button>
                        <input type="text" name="name" value="{{$item->qty}}">
                        <button class="minus-btn" wire:click="decrementItem('{{$item->rowId}}', {{ $item->qty }})" type="button" name="button">
                        <img src="minus.svg" alt="" />
                        </button>
                    </div>
                
                    <div class="total-price">₦{{ $item->total }}</div>
                </div>
            @endforeach          
        </div>          
    </div>
    @endif
</div>