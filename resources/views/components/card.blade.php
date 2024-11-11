@php
    /* vim: set filetype=blade.php : */
@endphp
<div {{ $attributes->merge(['class' => 'border border-violet-900 m-2 p-1 bg-slate-700 text-center rounded']) }}>
    {{ $slot }}
</div>
