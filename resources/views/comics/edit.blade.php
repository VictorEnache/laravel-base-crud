@extends('layouts.app')


@section('content')

<h1>Modifica:{{$comic->title}}</h1>

<form action="{{route('comics.update', $comic->id)}}" method="post">
    @method('PUT')
    @csrf
    <div>

        <label for="title">titolo</label>
        <input type="text" name="title" id="title" placeholder="seven deadly sins" value="{{$comic->title}}"  class="@error('title') is-invalid @enderror">
    </div>
    @error('title')
    <div class="alert alert-danger" style="color: green;">{{ $message }}</div>
@enderror
    <div>

        <label for="description">descrizione</label>
        <input type="text" name="description" id="description" placeholder="è la storia di 7 eroi..." value="{{$comic->description}}"  class="@error('description') is-invalid @enderror">
    </div>
    @error('description')
    <div class="alert alert-danger" style="color: green;">{{ $message }}</div>
@enderror

    <div>

        <label for="thumb">immagine</label>
        <input type="text" name="thumb" id="thumb" placeholder="https//..." value="{{$comic->thumb}}"  class="@error('thumb') is-invalid @enderror">
    </div>
    @error('thumb')
    <div class="alert alert-danger" style="color: green;">{{ $message }}</div>
@enderror

    <button type="submit">carica fumetto</button>

</form>

@if ($errors->any())
    <div class="alert alert-danger" style="color: red;">
        <ul style="display:block;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@endsection