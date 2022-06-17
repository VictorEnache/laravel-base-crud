@extends('layouts.app')

@section('content')
    <h1>{{$comic->title}}</h1>
    <p>{{$comic->description}}</p>
    <img src="https://picsum.photos/200/300" alt="">
@endsection