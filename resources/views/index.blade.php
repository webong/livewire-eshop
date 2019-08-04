@extends('layouts.app')

@section('content')
    @livewire('sidebar')
    <section class="content">
        @foreach ($items as $item)
            @livewire('item', $item, key($item->id))
        @endforeach
        {{-- @foreach($items as item)
            @livewire('item', $item, key($item->id))
        @endforeach --}}
    </section>
@endsection