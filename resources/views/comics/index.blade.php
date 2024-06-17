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
                                <a href="{{ route('comics.show', ['comic' => $comic->id]) }}" class="btn btn-primary">Comic
                                    Details</a>
                                <a href="{{ route('comics.edit', ['comic' => $comic->id]) }}" class="btn btn-warning">Comic
                                    Edit</a>

                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                    data-bs-target='[data-form="{{ $comic->id }}"]'>
                                    Delete
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="staticBackdrop" data-form="{{ $comic->id }}" data-bs-backdrop="static"
                                    data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Confirm</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Are you sure to delete {{ $comic->title }}?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <form action="{{ route('comics.destroy', ['comic' => $comic->id]) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger" id="delete"
                                                        type="submit">Delete</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
