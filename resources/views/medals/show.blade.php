@php
    /* vim: set filetype=blade.php : */
@endphp

@extends('layouts.app')

@section('content')
    <div class="flex">
        <x-card class="hover:bg-slate-600">
            <a href="{{ route('medals.home') }}" class="grid grid-cols-2 shrink-0">
                <x-elemplus-back width="25" height="25" />All Medals
            </a>
        </x-card>
    </div>
    <div class="grid grid-cols-1 place-content-center">
        <x-card>
            <h1 class="text-xl">{{ $medal->name }}</h1>
            <p class="text-xs">{{ $medal->slug }}</p>
            <p>{{ $medal->description }}</p>
        </x-card>
        <livewire:user-selector-list :$medal />
    </div>
@endsection
