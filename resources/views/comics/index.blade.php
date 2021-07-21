@foreach ($comics as $comic)
    <ul>
        <li>{{"Titolo originale: " . $comic->title }}</li>
        <li>{{"prezzo €" . $comic->price }}</li>
        <li>{{"data di pubblicazione " . $comic->sale_date }}</li>
    </ul>
    <a href="{{route('comics.show', $comic->id)}}">Show</a>  
    <a href="{{route('comics.edit', $comic->id)}}">Edit</a>
@endforeach