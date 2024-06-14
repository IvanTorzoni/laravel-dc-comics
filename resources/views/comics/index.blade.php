@extends('layouts.app')

@section('content')
    <section>
        <div class="container text-center">
            <h1 class="py-5">Comics page</h1>
            <div class="row g-3">
                @foreach ($comics as $comic)
                    <div class="col-12 col-md-6 col-lg-4 mb-4">
                        <div class="card" style="width: 18rem;">
                            <img src=" {{ $comic->thumb }} " class="img-fluid" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"> {{ $comic->title }} </h5>
                                <a href="#" class="btn btn-primary">Comic Details</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
