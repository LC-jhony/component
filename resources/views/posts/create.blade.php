<x-app>
    <x-slot name='header'>
        {{ __('Post/create') }}
    </x-slot>
    <x-container>
        <x-form method='post' action="{{ route('posts.store') }}" enctype="multipart/form-data">
            <div>
                <x-label value='title' />
                <x-input type='text' name='title' />
            </div>
            <div>
                <x-label value='slug' />
                <x-input type='text' name='slug' />
            </div>
            <div>
                <x-label value='description' />
                <x-textarea name='description' />
            </div>
            <div class="flex justify-end mt-3">
                <x-button type='submit' value='Registra' color='amber' />
            </div>
        </x-form>
    </x-container>
</x-app>
