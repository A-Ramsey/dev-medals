@php
    /* vim: set filetype=blade.php : */
@endphp

@extends('layouts.app')

@section('content')
    <div class="grid grid-cols-1 justify-center">
        <a href="{{ route('medals.home') }}"><x-elemplus-back />All Medals</a>
        <h1>{{ $medal->name }}</h1>
        <p>{{ $medal->slug }}</p>
        <p>{{ $medal->description }}</p>
        <livewire:user-selector-list :$medal />
    </div>
@endsection
