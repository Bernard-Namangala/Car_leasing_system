<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Car;
use Illuminate\support\Facades\DB;

class CarsController extends Controller
{
    public function getCars(){
        $cars = Car::all();
        return view('pages.getCars', compact('cars'));
      }
    public function getCar($id){
      $car = Car::find($id);
      return view('pages.getCar', compact('car'));
    }

    public function destroy($id)
    {
        // delete
        $car = Car::find($id);
        $car->delete();
        
        return redirect('/cars');
    }
    public function createCar(){
      return view('pages.createCar');
    }

    public function storeCar(Request $request)
    {
        $this->validate($request,[
            'car_name'       => 'required',
            'car_model'       => 'required',
            'car_price'       => 'required',
            'car_details'       => 'required',
        ]);
        Car::create($request->all());

        return redirect('/cars');
    }

    public function storeEditedCar(Request $request, $id)
    {
        $this->validate($request,[
            'car_name'       => 'required',
            'car_model'       => 'required',
            'car_price'       => 'required',
            'car_details'       => 'required',
        ]);
       $affected = DB::table('cars')->where('id', $id)->update($request->except('_token'));

        return redirect('/cars/'.$id);
    }
    public function editCar($id){
      $car = Car::find($id);
      return view('pages.editCar', compact('car'));
    }


}
