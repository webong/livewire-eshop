<section class="content">
    @foreach ($items as $item)
        @livewire('item', $item, key($item->id))
    @endforeach
</section>
