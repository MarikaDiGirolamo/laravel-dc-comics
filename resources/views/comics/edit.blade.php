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
        <h1>Modify Item</h1>
        <div class="row g-4 py-4">
            <div class="col">
                <form action="{{ route('comics.update', $comic) }}" method="post" class="need-validation">
                    @csrf
                    @method('PUT')

                    <label for="Title">Title</label>
                    <input class="form-control @error('title') is-invalid @enderror" type="text" name="title"
                        value="{{ $comic->title }}">
                    @error('title')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror

                    <label for="Description">Description</label>
                    <input class="form-control @error('description') is-invalid @enderror" type="text" name="description"
                        value="{{ $comic->description }}">
                    @error('description')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror


                    <label for="Thumb">Thumb</label>
                    <input class="form-control @error('thumb') is-invalid @enderror" type="text" name="thumb"
                        value="{{ $comic->thumb }}">
                    @error('thumb')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror

                    <label for="Price">Price</label>
                    <input class="form-control @error('price') is-invalid @enderror" type="text" name="price"
                        value="{{ $comic->price }}">
                    @error('price')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror


                    <label for="Series">Series</label>
                    <input class="form-control form-control @error('series') is-invalid @enderror" type="text"
                        name="series" value="{{ $comic->series }}">
                    @error('series')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror

                    <label for="Sale Date">Sale Date</label>
                    <input class="form-control form-control @error('sale_date') is-invalid @enderror" type="text"
                        name="sale date" value="{{ $comic->sale_date }}">
                    @error('sale_date')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror

                    <label for="Type">Type</label>
                    <select name="type" id="">
                        @foreach ($TypeComics as $TypeComic)
                            <option @selected($comic->type == $TypeComic->type)>{{ $TypeComic->type }}</option>
                        @endforeach
                    </select>


                    <input class="form-control mt-4 btn btn-primary" type="submit" value="Invia">




                </form>
                <form id="form" action="{{ route('comics.destroy', $comic) }}">
                    @csrf
                    @method('DELETE')
                    <input onclick="confirmDelete()" class="form-control mt-4 btn btn-danger" type="submit" value="Cancel">
                </form>
            </div>
        </div>

    </div>
    <script>
        function confirmDelete() {
            let r = confirm("Are you sure you want to discard this item??");
            if (r) {
                document.getElementById("form").submit();
            }
        }
    </script>
@endsection
