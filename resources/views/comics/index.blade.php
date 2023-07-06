@extends('layouts.app')

@section('content')
    <div class="container my-3">
        <h1>Comics List</h1>
        @foreach ($comics as $comic)
            <li><a href="{{ route('comics.show', $comic->id) }}">{{ $comic->title }}</a></li>
        @endforeach
        <div class="row g-4">
            <div class="col">
                <div>
                    <a class="btn btn-primary my-5" href="{{ route('comics.create') }}">Add a new Comic</a>
                </div>
            </div>
        @endsection
