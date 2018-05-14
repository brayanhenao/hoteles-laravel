@extends('layouts.app2')


@section('css')
    <style>
        .hotel {
            background-color: slategrey;
            text-align: center;
            display: inline-block;
            margin: 50px 40px 50px 50px;
            font-family: 'Skranji', cursive;
        }

        .hotel h3 {
            font-family: 'Alegreya', serif;
        }

        .hotel h5 {
            font-family: 'Alegreya', serif;
        }

        h1 {
            font-family: 'Alegreya', serif;
        }

        a {
            font-family: 'Alegreya', serif;
        }
    </style>
@endsection

@section('content')

    <div class="text-center">
        <h1> Selecciona un hotel para ver sus comentarios</h1>
    </div>
    @foreach($hotels as $hotel)

        <div class="hotel">
            <strong><h3>{{$hotel->nombre}}</h3></strong>
            <h5>{{$hotel->ciudad}}</h5>

            <img style="width: 200px;height: 200px" src="{{$hotel->imagen}}">

            <p>Dirección: {{$hotel->ubicacion}}</p>

            <p>{{$hotel->estrellas}} <i class="glyphicon glyphicon-star"></i></p>

            {!! Form::open(['route' => ['hotels.destroy', $hotel->id], 'method' => 'delete']) !!}
            <div class='btn-group'>
                <a href="{!! route('hotels.show', [$hotel->id]) !!}" class='btn btn-default btn-xs'><i
                            class="glyphicon glyphicon-eye-open"></i> Ver </a>

            </div>
            {!! Form::close() !!}

        </div>
    @endforeach

@endsection

