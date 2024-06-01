<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body class="font-sans antialiased bg-gray-50">
    {{-- <x-navbar /> --}}
    <div class="flex-col w-full md:flex md:flex-row md:min-h-screen">
        <div @click.away="open = false"
            class="flex flex-col flex-shrink-0 w-full text-gray-700 bg-slate-100 md:w-64 dark:text-gray-200 dark:bg-gray-800"
            x-data="{ open: false }">
            <x-logo />
            <x-sidebar>
                <x-nav-link :href="route('dashboard.index')" :active="request()->routeIs('dashboard.index')">
                    <x-icon type='Light' size='lg' value='house' class='mr-2' />
                    Post
                </x-nav-link>
                <x-nav-link :href="route('posts.index')" :active="request()->routeIs('posts.index')">
                    <x-icon type='regular' size='lg' value='user' class='mr-2' />
                    Post
                </x-nav-link>
            </x-sidebar>
        </div>

        <main class="m2 p-8 w-full">
            <div class="mx-auto mt-4 max-w-7xl sm:px-6 lg:px-8 mb-4">
                {{ $header }}
            </div>
            {{ $slot }}
        </main>


        <x-alert />
        @vite('resources/js/app.js')
</body>

</html>
