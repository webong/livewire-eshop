<div class="item">
    <p>{{ $item->name }}</p>
    @if($item->sale)
        <span class="salepill">Sale</span>
    @endif
    <img src="{{url($item->img)}}" alt="Image of {{$item->name}}">
    <p>₦{{$item->price}}</p>
    <button wire:click="addItem" class="add">Add Item</button>
</div>