@extends('layouts.app')

@section('content')
@foreach ($comics as $comic)
<div class="comic">
    <h3>{{$comic['title']}}</h3>
    <p>{{$comic['description']}}</p>
    <p>{{$comic['series']}}</p>
    <p>{{$comic['price']}}</p>
</div>
@endforeach
@endsection
