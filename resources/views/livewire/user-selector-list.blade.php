@php
    /* vim: set filetype=blade.php : */
@endphp
<x-card>
    <h1 class="text-lg">Assign Medal</h1>
    <hr>
    @foreach ($allUsers as $user)
        <livewire:user-selector :$user :$medal />
    @endforeach
</x-card>
