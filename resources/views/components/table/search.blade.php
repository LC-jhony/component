@props(['disabled' => false])
@php
    $class = 'block w-full border-gray-300 shadow-sm transition duration-150 ease-in-out sm:text-sm sm:leading-5 dark:bg-gray-700 dark:text-white dark:border-gray-600
        focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md';
@endphp
<div class="flex rounded-md shadow-sm">
    <input {{ $disabled ? 'disabled' : '' }} {{ $attributes->merge(['class' => $class]) }}>
</div>
