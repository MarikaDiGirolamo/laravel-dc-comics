@extends('layouts.app')

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="container my-3">
        <h1>Create New Product</h1>

        <div class="row g-4 py-4">
            <div class="col">
                <form action="{{ route('comics.store') }}" method="post">
                    @csrf

                    <label for="Title">Title</label>
                    <input class="form-control @error('title') is-invalid @enderror" type="text" name="title"
                        value={{ old('title') ?? $comic->title }}">
                    @error('title')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    <label>Description</label>
                    <textarea name="Description" class="form-control @error('description') is-invalid @enderror" cols="30"
                        rows="5">
                        {{ old('description') ?? $comic->description }} 
                    </textarea>
                    @error('description')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror

                    <label for="Thumb">Thumb</label>
                    <input class="form-control @error('thumb') is-invalid @enderror" type="text" name="thumb"
                        value="{{ old('thumb') ?? $comic->thumb }}">
                    @error('thumb')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror

                    <label for="Price">Price</label>
                    <input class="form-control form-control @error('price') is-invalid @enderror" type="text"
                        name="price" value="{{ old('price') ?? $comic->price }}">
                    @error('price')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror

                    <label for="Series">Series</label>
                    <input class="form-control form-control @error('series') is-invalid @enderror" type="text"
                        name="Series" value="{{ old('series') ?? $comic->series }}">
                    @error('series')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror

                    <label for="Sale">Sale Date</label>
                    <input class="form-control form-control @error('sale_date') is-invalid @enderror" type="text"
                        name="Sale Date" value="{{ old('sale_date') ?? $comic->sale_date }}">
                    @error('sale_date')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror


                    {{-- <label for="name">type</label>
                    <select @error('type') is-invalid @enderror name="type" id="">
                        @foreach ($TypeComics as $TypeComic)
                            <option @selected($comic->type == $TypeComic->type)>{{ $TypeComic->type }}</option>
                        @endforeach
                    </select>
                    @error('type')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror --}}


                    <input class="form-control mt-4 btn btn-primary" type="submit" value="Invia">
                </form>
            </div>
        </div>

    </div>
@endsection
