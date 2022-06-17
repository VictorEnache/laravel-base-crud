@extends('layouts.app')


@section('content')

<form action="{{route('comics.store')}}" method="post">
    @csrf

    <label for="title">titolo</label>
    <input type="text" name="title" id="title" placeholder="seven deadly sins">

    <label for="description">descrizione</label>
    <input type="text" name="description" id="description" placeholder="è la storia di 7 eroi...">

    <label for="thumb">immagine</label>
    <input type="text" name="thumb" id="thumb" placeholder="https//...">

    <button type="submit">carica fumetto</button>

</form>
@endsection