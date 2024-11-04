@extends('layouts.landing')

@section('title','services')

@section('content')

<h1 class="text-4xl font-semibold dark:text-white">services</h1>

@component('_components.card')
    @slot('title', 'Service 1')
    @slot('alt', 'Service 1')
    @slot('content', 'parrafo 1')
@endcomponent

@component('_components.card')
    @slot('title', 'Service 2')
    @slot('alt', 'Service 2')
    @slot('content')
        <p>parrafo 2</p>
    @endslot
@endcomponent

@component('_components.card')
    @slot('title', 'Service 3')
    @slot('alt', 'Service 3')
    @slot('content', 'parrafo 3')
@endcomponent
    
@endsection