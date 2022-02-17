@extends('layouts.base')

@section('content')

    <h1>Films</h1>

    <a href="/exercice/films/creer">Ajouter un film</a>
    
    <ul>
    @foreach ($movies as $movie)
    <li>
    <a href="/exercice/films-show/{{$movie->id}}">{{$movie->title}}</a> 
    </li>
    @endforeach
    </ul>
@endsection