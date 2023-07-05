@extends('layouts.app')

@section('content')
    <div class="container my-3">
        <h1>Products List</h1>
        <div class="row g-4">
            <div class="col">
                <div>
                    <a class="btn btn-primary" href="{{ route('comics.create') }}">Aggiungi un nuovo prodotto</a>
                </div>
            </div>
            @foreach ($comics as $comic)
                <li><a href="{{ route('comics.show', $comic->id) }}">{{ $comic->title }}</a></li>
            @endforeach
            {{-- @foreach ($comics as $comic)
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Company</th>
                    <th scope="col">Departure</th>
                    <th scope="col">Arrival</th>
                    <th scope="col">Departure Time</th>
                    <th scope="col">Arrival Time</th>
                    <th scope="col">Train Code</th>
                    <th scope="col">Carriage</th>
                    <th scope="col">On Time</th>
                    <th scope="col">Deleted</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">{{ $comic->id }}</th>
                    <td>{{ $comic->title }}</td>
                    <td>{{ $comic->description }}</td>
                    <td>{{ $comic->thumb }}</td>
                    <td>{{ $comic->price }}</td>
                    <td>{{ $comic->series }}</td>
                    <td>{{ $comic->sale_date }}</td>
                    <td>{{ $comic->artists }}</td>
                    <td>{{ $comic->writers }}</td>
                </tr>
            </tbody> --}}
            {{-- @endforeach --}}
        @endsection
