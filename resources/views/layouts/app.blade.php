@php
    /* vim: set filetype=blade.php : */
@endphp
@extends('layouts.base')

@section('body')
    <div class="h-screen">
        @yield('content')
    </div>

    @isset($slot)
        {{ $slot }}
    @endisset
@endsection
