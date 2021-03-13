@extends('plantilla')

@section('content')
    <h1>Portafolio</h1>

        <ul>
            @foreach($portafolio as $portafolio)
            <li>
                {{$portafolioItem['title']}}
            </li>
            @endforeach
        </ul>
@endsection


@section('title', 'portafolio');


