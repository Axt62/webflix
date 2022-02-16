@extends('layouts.base')
    
    <h1>Hello  {{$name}}</h1>

    @section('content')
        <ul>
            
            @foreach ($numbers as $number)
                <li>{{ $number }}</li>
            @endforeach

        </ul>
    @endsection
        












