<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
@vite('resources/css/app.css')
@livewireStyles

<x-slot name="header">
    <h1 class="text-gray-900">Area de libros esenciales</h1>
</x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px6 lg:px8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4">
            <button wire:click="crear()" class="bg-green-500 hover:bg-green-600 font-bold py-2 px-4 my-3">Nuevo</button>
            
            @if($modal)
                @include('liveweri.crear')
            @endif
            <table class="table-fixed w-full">
                <thead>
                    <tr class="bg-indigo-600 text-white">
                        <th class="px-4 py-2">Title</th>
                        <th class="px-4 py-2">Author</th>
                        <th class="px-4 py-2">Description</th>
                        <th class="px-4 py-2">Price $</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($books as $book)
                    <tr>
                        <td class="border px-4 py-2">{{$book->title}}</td>
                        <td class="border px-4 py-2">{{$book->author}}</td>
                        <td class="border px-4 py-2">{{$book->description}}</td>
                        <td class="border px-4 py-2">{{$book->price}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>