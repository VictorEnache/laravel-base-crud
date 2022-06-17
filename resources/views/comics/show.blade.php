@extends('layouts.app')

@section('content')

    <h1>{{$comic->title}}</h1>
    <p>{{$comic->description}}</p>
    <img src="{{$comic->thumb}}" width="200" alt="">
@endsection