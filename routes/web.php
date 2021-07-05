<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });



Route::get('/', 'App\Http\Controllers\pageController@index');

Route::get('/cars/{id}/',[CarsController::class, 'getCar'] )->where('id', '[0-9]+');

Route::get('/cars/',[CarsController::class, 'getCars'] );

Route::get('/navigation', 'App\Http\Controllers\pageController@navigation');

Route::delete('/cars/{id}/',[CarsController::class, 'destroy'] )->where('id', '[0-9]+');

Route::get('/cars/create-car/',[CarsController::class, 'createCar'] );

Route::post('/cars/store-car/',[CarsController::class, 'storeCar']);

Route::get('/cars/{id}/edit',[CarsController::class, 'editCar'])->where('id', '[0-9]+');

Route::post('/cars/edit-car/{id}',[CarsController::class, 'storeEditedCar'])->where('id', '[0-9]+');

Auth::routes();