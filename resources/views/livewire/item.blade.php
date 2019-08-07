<div class="item">
    <p>{{ $item->name }}</p>
    @if($item->sale)
        <span class="salepill">Sale</span>
    @endif
    <img src="{{url($item->img)}}" alt="Image of {{$item->name}}">
    <p>₦{{$item->price}}</p>
    @isset($rowId)
        <button wire:click="removeFromCart('{{ $rowId }}')" wire:loading.attr="disabled" class="remove">Remove Item</button>
    @else
        <button wire:click="addToCart('{{ $item }}')" wire:loading.attr="disabled" class="add">Add Item</button>
    @endisset
</div>