@props(['color' => 'blue', 'border' => 'blue'])

@php
    $CardColorClass =
        [
            'blue ' => 'bg-blue-50',
            'orange' => 'bg-orange-50',
            'red' => 'bg-red-50',
            'indigo' => 'bg-indigo-50',
        ][$color] ?? 'bg-blue-50';
    $IconBorderClass =
        [
            'blue ' => 'border-blue-100',
            'orange' => 'border-orange-100',
            'red' => 'border-red-100',
            'indigo' => 'border-indigo-100',
        ][$border] ?? 'border-blue-100';
@endphp
<div class="flex items-start p-4 rounded-xl shadow-lg bg-white">
    <div
        class="flex items-center justify-center {{ $CardColorClass }} h-12 w-12 rounded-full border {{ $IconBorderClass }} ">
        {{ $icon }}
    </div>

    <div class="ml-4">
        {{ $slot }}
    </div>
</div>
