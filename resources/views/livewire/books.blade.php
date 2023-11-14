<div>
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}

    <table>
        <thead>
            <tr>
                <th>Title</th>
                <th>Author</th>
                <th>Description</th>
                <th>Price</th>
            </tr>
        </thead>

        <tbody>
            @foreach($books as $book)
            <tr>
                <td>{{$book->title}}</td>
                <td>{{$book->author}}</td>
                <td>{{$book->description}}</td>
                <td>{{$book->price}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
