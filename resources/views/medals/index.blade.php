@php
    /* vim: set filetype=blade.php : */
@endphp
@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="flex-col justify-center">
            <h1 class="text-lg text-gray-200">Medals</h1>

            <x-card>
                <h2 class="">Create Medal</h2>
                <form class="grid grid-cols-1" method="post" action="{{ route('medals.save') }}">
                    @csrf
                    <label for="name">Name</label>
                    <input type="text" name="name" class="bg-slate-600 border-violet-900 rounded-md" />

                    <label for="slug">Slug</label>
                    <input type="text" name="slug" class="bg-slate-600 border-violet-900 rounded-md" />

                    <label for="description">Description</label>
                    <textarea name="description" class="bg-slate-600 border-violet-900 rounded-md"></textarea>

                    <button type="submit" class="rounded-md bg-violet-800 m-2">Create Medal!</button>
                </form>
            </x-card>
        </div>
    </div>

    <div class="grid sm:grid-cols-2 md:grid-cols-4 grid-cols-1">
        @foreach ($medals as $medal)
            <x-card>
                <a href="{{ route('medals.show', $medal->id) }}">
                    <h3 class="text-xl bold text-center">{{ $medal->name }}</h3>
                    <p class="text-sm">{{ $medal->slug }}</p>
                    <p class="text-align-start">{{ $medal->description }}</p>
                </a>
            </x-card>
        @endforeach
    </div>
@endsection
