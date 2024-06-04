@extends('layout')

@section('title','Talleres')

@section('content')
    <h1>Talleres!</h1>
    <ul>
        @if($talleres)
            @foreach ($talleres as $item)
               <li>{{ $item['titulo'] }}</li>        
            @endforeach
        @else
            <li>No existe ningún taller</li>
        @endif
    </ul>
@endsection