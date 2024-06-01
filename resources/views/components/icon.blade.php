@props([
    'type' => 'solid',
    'size' => '',
    'value' => '',
    'class' => '',
])
@php
    $IcontypeClass =
        [
            'solid' => 'solid',
            'regular' => 'regular',
            ' light ' => 'light',
            'duotone ' => 'duotone',
            'thin ' => 'thin',
        ][$type] ?? 'solid';

    $IconSizeClass =
        [
            '2xs ' => '2xs',
            'xs' => 'xs',
            'sm' => 'sm',
            'lg' => 'lg',
            'xl' => 'xl',
            '2xl' => '2xl',
        ][$size] ?? '';
@endphp
<span class="{{ $class }}">
    <i class="fa-{{ $IcontypeClass }} fa-{{ $value }} fa-{{ $IconSizeClass }}"></i>
</span>
