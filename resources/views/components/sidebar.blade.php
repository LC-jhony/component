<nav :class="{ 'block': open, 'hidden': !open }" class="flex-grow px-4 pb-4 md:block md:pb-0 md:overflow-y-auto">
    {{ $slot }}
</nav>
