@section('content')
    <div>
        <h2>{{$comics->title}}</h2>
        <p>{{$comics->description}}</p>  
        <h3>{{$comics->price}}</h3>  
        <h3>{{$comics->sale_date}}</h3>
        <h3>{{$comics->series}}</h3>
    </div>
@endsection