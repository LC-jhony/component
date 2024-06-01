@props(['value'])
<label {{ $attributes->merge(['class' => 'mt-3 block text-sm font-medium text-gray-700']) }}>
    {{ $value ?? $slot }}
</label>
