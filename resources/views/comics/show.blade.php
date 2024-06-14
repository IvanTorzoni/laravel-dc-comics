@extends('layouts.app')

@section('content')
    <section>
        <h1 class="py-5 text-center">Detail Page</h1>
        <div class="container d-flex border border-secondary-subtle">
            <img src=" {{ $comic->thumb }} " class="img-fluid" alt="{{ $comic->thumb }}">
            <dl class="px-5">
                <dt class="fs-1">Title</dt>
                <dd class="fw-semibold"> {{ $comic->title }} </dd>
              
                <dt class="fs-3">Description</dt>
                <dd class="fw-semibold">{{ $comic->description }}</dd>
              
                <dt class="fs-3">Price</dt>
                <dd class="fw-semibold">{{ $comic->price }}</dd>
                
                <dt class="fs-3">Series</dt>
                <dd class="fw-semibold">{{ $comic->series }}</dd>
                
                <dt class="fs-3">Sale_date</dt>
                <dd class="fw-semibold">{{ $comic->sale_date }}</dd>
                
                <dt class="fs-3">Type</dt>
                <dd class="fw-semibold">{{ $comic->type }}</dd>
              </dl>
              

    </section>
@endsection
