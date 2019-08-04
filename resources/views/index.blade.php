@extends('layouts.app')

@section('content')
    @livewire('sidebar')
    <section class="content">
        @foreach($items as item)
            @livewire('item', $item)
        @endforeach
    </section>
@endsection