@extends('layouts.app')
@section('content')
<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Model</td>
            <td>Price</td>
            <td>Details</td>
        </tr>
    </thead>
    <tbody>
    @foreach($cars as $car)
        <tr>
     
            <td>{{ $car->id }}</td>
            <td>   <a href="/cars/{{$car->id}}">{{ $car->car_name }}</a></td>
            <td>{{ $car->car_model }}</td>
            <td>{{ $car->car_price }}</td>
            <td>{{ $car->car_details }}</td>
           
        </tr>

    @endforeach
    </tbody>
</table>

@endsection