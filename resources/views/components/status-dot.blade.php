@props(['status'])

@php
    $color = match ($status) {
        'published' => 'bg-green-500',
        'unpublished' => 'bg-red-500',
        default => 'bg-gray-400',
    };
@endphp

<span class="inline-flex items-center gap-2">
    <span class="w-2.5 h-2.5 rounded-full {{ $color }}"></span>
</span>