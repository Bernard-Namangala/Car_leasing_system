@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h3>{{ __('Upload Car') }}</h3></div>

                <div class="card-body">
                    <form method="POST" action="/cars/store-car">
                        @csrf

                        <div class="form-group row">
                            <label for="car_name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="car_name" type="text" class="form-control @error('car_name') is-invalid @enderror" name="car_name" value="{{ old('car_namae') }}" required autocomplete="car_name" autofocus>

                                @error('car_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

            

                        <div class="form-group row">
                            <label for="car_model" class="col-md-4 col-form-label text-md-right">{{ __('Model') }}</label>

                            <div class="col-md-6">
                                <input id="car_model" type="text" class="form-control @error('car_model') is-invalid @enderror" name="car_model" required autocomplete="car-model">

                                @error('car_model')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="car_price" class="col-md-4 col-form-label text-md-right">{{ __('Price') }}</label>

                            <div class="col-md-6">
                                <input id="car_price" type="number" class="form-control @error('car_price') is-invalid @enderror" name="car_price" required autocomplete="car-price">

                                @error('car_price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="car_details" class="col-md-4 col-form-label text-md-right">{{ __('Details') }}</label>

                            <div class="col-md-6">     
                        <textArea  name="car_details"  id="car_details" class="form-control @error('car_details') is-invalid @enderror" required></textArea>
                                @error('car_details')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Lease') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
