@props([
    'left' => '',
    'right' => '',
])
<div class="mx-auto mt-4 max-w-7xl sm:px-6 lg:px-8">
    <div class="md:flex md:justify-between mb-4 px-4 md:p-0">

        @if ($left)
            <div class="w-full mb-4 md:mb-0 md:w-2/4 md:flex space-y-4 md:space-y-0 md:space-x-2">
                {{ $left }}
            </div>
        @endif
        @if ($right)
            <div class="md:flex md:items-center space-y-4 md:space-y-0 md:space-x-2">
                {{ $right }}
            </div>
        @endif
    </div>
    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        {{ $slot }}
    </div>
    @if ($paginate)
        <div class="mt-4 ">
            {{ $paginate }}
        </div>
    @endif
</div>
