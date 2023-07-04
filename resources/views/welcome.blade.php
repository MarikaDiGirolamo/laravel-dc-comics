@extends('layouts.app')

@section('content')
@include('partials.jumbotron')
<div class="container my-3">
    <h1>Welcome Page</h1>
    <div class="row g-4">
        <div class="col">
            <div>
                <img src="{{ Vite::asset('resources/img/adv.png') }}" alt="">
                @foreach ($comics as $comic)
                <div>
                    {{$comic["title"] }}
                    <img class="comicCover" src="{{$comic["thumb"]}}" alt="{{$comic["title"]}}"/>
                    @foreach ($comic["artists"] as $artist)
                    <li>{{$artist}}</li>
                    @endforeach
                    


                </div>
                    
                @endforeach
            </div>
        </div>
    </div>

</div>
@endsection