@extends('layouts.app')


@section('content')

<div class="container">
    <a href="{{route('comics.create')}}"><h2 style="color: red;">aggiungi un nuovo fumetto</h2></a>
    <table>
    
        <thead >
            <th>id</th>
            <th>title</th>
            <th>description</th>
            <th>img</th>
        </thead>
            @forelse($comics as $comic)
            <tbody>
                <tr>
                    <td>{{$comic->id}}</td>
                    <td>{{$comic->title}}</td>
                    <td>{{$comic->description}}</td>
                    <td><img src="{{$comic->thumb}}"  width="100" alt=""></td>
                    <td><a href="{{route('comics.show', $comic->id)}}">modifica</a></td>
                </tr>
                @empty
                    <tr>
                        <td>al momento non ci sono fumetti da mostrare</td>
                    </tr>
            </tbody>
    
            @endforelse
    </table>

</div>
@endsection