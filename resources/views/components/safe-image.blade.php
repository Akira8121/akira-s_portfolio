@props(['src', 'alt' => '', 'class' => '', 'lightbox' => false])

@php
    $defaultImage = 'images/no-image.png';
    $src = $src && file_exists(public_path($src)) ? $src : $defaultImage;
@endphp

@if($lightbox)
<a href="{{ asset($src) }}" data-lightbox="work-images" data-title="{{ $alt }}">
    <img src="{{ asset($src) }}" alt="{{ $alt }}" class="{{ $class }} hover:scale-105 transition duration-300 cursor-pointer rounded-lg" />
</a>
@else
<img src="{{ asset($src) }}" alt="{{ $alt }}" class="{{ $class }} rounded-lg" />
@endif
