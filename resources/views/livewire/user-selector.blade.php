@php
    /* vim: set filetype=blade.php : */
@endphp
<div>
    <form>
        <input value="{{ $user->id }}" type="checkbox" name="user-{{ $user->id }}" wire:model="checked"
            wire:click="save" @if($checked) checked @endif />
        <label for="user-{{ $user->id }}">{{ $user->name }}</label>
    </form>
</div>
