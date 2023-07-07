@extends('layouts.app')

@section('content')
    <div class="container my-3 flex-wrap">
        <div class="row g-4">
            <div class="col-6">
                <h1>Comics List</h1>
            </div>
            <div class="col-6 d-flex justify-content-end">
                <a class="btn btn-primary" href="{{ route('comics.create') }}">Add a new Comic</a>
            </div>
        </div>

        <div class="row flex-wrap">
            @foreach ($comics as $comic)
                <div class="col-4 p-3 mb-5">
                    <div class="card">
                        <div class="card-body">
                            <img class="img-fluid" src="{{ $comic->thumb }}" alt="">
                            <h2 class="card-title pt-3"{{ route('comics.show', $comic->id) }}>{{ $comic->title }}</h2>

                            <div>
                                <a class="btn btn-primary my-5" href="{{ route('comics.show', $comic->id) }}">Read More</a>
                            </div>

                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    @endsection
