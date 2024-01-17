@extends('master.master')
@section('master')
<main>
     @livewire('component.popular-product-component')
        @livewire('component.categorie-component')

        @livewire('component.product-component')
    </main>
@endsection
