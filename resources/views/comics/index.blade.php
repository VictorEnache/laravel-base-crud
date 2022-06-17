@extends('layouts.app')


@section('content')

<div class="container">

    <a href="{{route('comics.create')}}">
        <h2 style="color: red;">aggiungi un nuovo fumetto</h2>
    </a>

    <table>
        <thead>
            <th>id</th>
            <th>title</th>
            <th>description</th>
            <th>img</th>
            <th>mostra</th>
            <th>modifica</th>
            <th>elimina</th>
        </thead>
        <tbody>
        @forelse($comics as $comic)

            <tr>
                <td>{{$comic->id}}</td>
                <td>{{$comic->title}}</td>
                <td>{{$comic->description}}</td>
                <td><img src="{{$comic->thumb}}" width="100" alt=""></td>
                <td><a href="{{route('comics.show', $comic->id)}}">mostra</a> </td>
                <td><a href="{{route('comics.edit', $comic->id)}}">modifica</a> </td>
                <td>
                    <form action="{{route('comics.destroy', $comic->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit">cancella</button>
                        </form> 
                </td>
            </tr>
            @empty
            <tr>
                <td>al momento non ci sono fumetti da mostrare</td>
            </tr>
            
            @endforelse
        </tbody>
    </table>

</div>
@endsection