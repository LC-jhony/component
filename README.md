<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://github.com/LC-jhony/component/blob/main/public/component.PNG"></a></p>

## Table Component
```html
    <x-table.component>
        <x-slot name="left">
            <x-table.search placeholder="Search" type="text" />
        </x-slot>
        {{-- <x-slot name="right">
            11111
        </x-slot> --}}
        <x-table.table :headers="['id', 'title', 'slug', 'Fecha', ['name' => 'accion', 'align' => 'center']]">

            @foreach ($posts as $row)
                <tr class="dark:bg-gray-700 dark:text-white bg-white">
                    <x-table.td>{{ $row->id }}</x-table.td>
                    <x-table.td>{{ $row->title }}</x-table.td>
                    <x-table.td>{{ $row->slug }}</x-table.td>
                    <x-table.td>{{ $row->created_at->format('d/m/Y') }}</x-table.td>
                </tr>
            @endforeach
        </x-table.table>
        <x-slot name="paginate">
            <x-table.td>{{ $posts->links() }}</x-table.td>
        </x-slot>

    </x-table.component>
```

## Card Component
```html
    <x-card-container>
        <x-card>
            <x-slot name='icon'>
                <x-icon type='regular' size='lg' value='comment-dots' class='text-blue-500' />
            </x-slot>
            <h2 class="font-semibold">574 Messages</h2>
            <p class="mt-2 text-sm text-gray-500">Last opened 4 days ago</p>
        </x-card>
        <x-card color='orange' border='orange'>
            <x-slot name='icon'>
                <x-icon type='regular' size='lg' value='user' class='text-orange-500' />
            </x-slot>
            <h2 class="font-semibold">1823 Users</h2>
            <p class="mt-2 text-sm text-gray-500">Last checked 3 days ago</p>
        </x-card>
        <x-card color='red' border='red'>
            <x-slot name='icon'>
                <x-icon type='Light' size='lg' value='book-open' class='text-red-500' />
            </x-slot>
            <h2 class="font-semibold">548 Posts</h2>
            <p class="mt-2 text-sm text-gray-500">Last authored 1 day ago</p>
        </x-card>
        <x-card color='indigo' border='indigo'>
            <x-slot name='icon'>
                <x-icon type='regular' size='lg' value='message' class='text-indigo-500' />
            </x-slot>
            <h2 class="font-semibold">129 Comments</h2>
            <p class="mt-2 text-sm text-gray-500">Last commented 8 days ago</p>
        </x-card>
    </x-card-container>

```
## Button Component
```html
    <x-button href="{{ route('posts.create') }}" color='amber'>
            <x-icon type='regular' size='lg' value='plus' class="text-withe" />
            Registra Post
        </x-button>
```
```html
    <x-button type='submit' color='amber'>
            <x-icon type='regular' size='lg' value='plus' class="text-withe" />
            Registra Post
        </x-button>
```
## Icon Font Awesome Component
```html
    <x-button type='submit' color='amber'>
            <x-icon type='regular' size='lg' value='plus' class="text-withe" />
            Registra Post
        </x-button>
```
