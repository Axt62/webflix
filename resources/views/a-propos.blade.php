@extends('layouts.base')

@section('content')

<h1>A PROPOS</h1>
    
    @foreach($dev as $d)
    
        <li><a href="">{{ $d }}</a></li>
    
    @endforeach


@endsection