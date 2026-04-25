@props(['width' => '', 'href' => null])

@php
    $classes = "bg-primary text-white py-2.5 px-5 rounded-lg text-sm font-semibold hover:bg-primary-dark transition-colors text-center inline-block " . $width;
@endphp

@if ($href)
    <a href="{{ $href }}" {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </a>
@else
    <button {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </button>
@endif
