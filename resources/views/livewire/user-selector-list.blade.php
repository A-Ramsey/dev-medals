@php
    /* vim: set filetype=blade.php : */
@endphp
<div>
    @foreach ($allUsers as $user)
        <livewire:user-selector :$user :$medal />
    @endforeach
</div>
