<div>
    @livewire('sidebar')
    <section class="content">
        @foreach ($items as $item)
            @livewire('item', ['item' => $item], key($item->id))
        @endforeach
    </section>
</div>
