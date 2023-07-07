@extends('layouts.app')

@section('content')
    <div class="container my-3 flex-wrap">
        <h1>Comics List</h1>

        <div class="row flex-wrap">
            @foreach ($comics as $comic)
                <div class="col-4 p-3 mb-5">
                    <div class="card">
                        <div class="card-body">
                            <img src="{{ Vite::asset('resources/img/.png') }}" class="card-text">
                            <h2 class="card-title pt-3"{{ route('comics.show', $comic->id) }}>{{ $comic->title }}</h2>

                            <div>
                                <a class="btn btn-primary my-5" href="{{ route('comics.show', $comic->id) }}">Read More</a>
                            </div>

                        </div>
                    </div>
                </div>
            @endforeach
            <div class="row g-4">
                <div class="col">
                    <div>
                        <a class="btn btn-primary my-5" href="{{ route('comics.create') }}">Add a new Comic</a>
                    </div>
                </div>
            </div>
        </div>
    @endsection
