<div>
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
    <h1 class="text-3xl font-bold underline">
    Hello world!
  </h1>
    <table class="table-fixed w-full">
        <thead>
            <tr class="bg-indigo-600 text-white">
                <th class="px-4 py-2">Title</th>
                <th class="px-4 py-2">Author</th>
                <th class="px-4 py-2">Description</th>
                <th class="px-4 py-2">Price</th>
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
