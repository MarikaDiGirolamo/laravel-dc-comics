@extends('layouts.app')

@section('content')
    <div class="container my-3">
        <div class="row my-3">
            <div class="col-12">
                <h1>{{ $comic->title }}</h1>
            </div>
        </div>

        <div>
            @if ($comic->thumb)
                <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
            @else
                <img src="https://i0.wp.com/theperfectroundgolf.com/wp-content/uploads/2022/04/placeholder.png"
                    alt="{{ $comic->title }}">
            @endif
        </div>
        <div class="row py-5">
            <div class="col-12">
                <h2><b>Description:</b></h2>
                <h2><em>{{ $comic->description }}</em></h2>
            </div>
        </div>

        <div class="row">
            <div class="col-6 py">
                <h3><b>Price:</b> {{ $comic->price }}</h3>
            </div>
            <div class="col-6 d-flex justify-content-end">
                <h3><b>Genre:</b> {{ $comic->type }}</h3>
            </div>
        </div>
        <div class="row py-5">
            <div class="col-6">
                <a class="btn btn-primary" href="{{ route('home') }}">
                    <<< Back</a>
            </div>
            <div class="col-6 d-flex justify-content-end">
                <a class="btn btn-primary" href="{{ route('comics.edit', $comic) }}">Modify >>> </a>
            </div>
        </div>
        <div class="row">
            <div class="col-12 my-3">
                <a href="{{ route('home') }}">Go back to Comic List</a>
            </div>
        </div>

    </div>
@endsection
