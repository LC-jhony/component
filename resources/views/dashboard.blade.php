<x-app>
    <x-slot name='header'>
        {{ __('Dasboard') }}
    </x-slot>
    <x-container>
        <div>
            <x-label value="Textarea" />
            <x-textarea name="description" cols="2" rows="3" />
        </div>
        <div>
            <x-label value='name' />
            <x-input name='name' />
        </div>

        <div class="mt-4">
            <x-button href="/" size='base' color='green'>
                <x-icon type='regular' size='lg' value='user' color='text-white mr-2' />
                Create
            </x-button>
        </div>
        </div>
    </x-container>
</x-app>
