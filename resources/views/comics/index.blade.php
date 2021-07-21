@foreach ($comics as $comic)
    <ul>
        <li>{{ $comic->title }}</li>
        <li>{{ $comic->price }}</li>
        <li>{{ $comic->sale_date }}</li>
    </ul>
    <a href="{{route('comics.show', $comic->id)}}">Show</a>  
    <a href="{{route('comics.edit', $comic->id)}}">Edit</a>
@endforeach