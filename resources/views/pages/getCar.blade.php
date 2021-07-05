@extends('layouts.app')
@section('content')

<div class="jumbotron text-center">
        <h2>{{ $car->car_name }}</h2>
        <p>
            <strong>Model:</strong> {{ $car->car_model}}<br>
            <strong>Price:</strong> {{ $car->car_price}}</br>
            <strong>Details:</strong> {{ $car->car_details}}
        </p>

        @if (Auth::check()) 
        @if(Auth::user()->id ===$car->user_id)
        <form action="/cars/{{$car->id}}" method="POST">
            @method('DELETE')
            @csrf
            <a href="/cars/{{$car->id}}/edit" class="btn btn-primary">Edit Car</i></a>
            <button type="submit" class="btn btn-danger">Delete Car</i></button>
           
        </form>
        @endif
        @endif
      
    </div>

@endsection