<div class="item">
    <p>{{ $item->name }}</p>
    @if($item->sale)
        <span class="salepill">Sale</span>
    @endif
    <img src="{{url($item->img)}}" alt="Image of {{$item->name}}">
    <p>₦{{$item->price}}</p>
    @isset($rowId)
        <button wire:click="$emit('removeItem', '{{ $item }}')" class="remove">Remove Item</button>
    @else
        <button wire:click="$emit('addItem', '{{ $item }}')" class="add">Add Item</button>
    @endisset
</div>