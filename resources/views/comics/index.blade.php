@foreach ($comics as $comic)
    <ul>
        <li>{{ $comic->title }}</li>
        <li>{{ $comic->price }}</li>
        <li>{{ $comic->sale_date }}</li>
    </ul>
@endforeach