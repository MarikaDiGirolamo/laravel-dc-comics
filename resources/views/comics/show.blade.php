@extends('layouts.app')

@section('content')
    <div class="container my-3">

        <h1>{{ $comic->title }}</h1>

        <div class="row g-4">
            <div class="col">
                <a class="btn btn-primary" href="{{ route('home') }}">
                    <<< Back</a>
                        <a class="btn btn-primary" href="{{ route('comics.edit', $comic) }}">Modify >>> </a>
            </div>
        </div>
        <div class="row g-4">
            <div class="col">
                <a href="{{ route('home') }}">Go back to Comic List</a>
            </div>
        </div>

    </div>
@endsection
