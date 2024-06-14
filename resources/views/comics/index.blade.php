@extends('layouts.app')

@section('content')
    <h1>Comics Page</h1>

    @foreach ($comics as $comic)
        <p> {{ $comic->title}}</p>
    @endforeach
@endsection
