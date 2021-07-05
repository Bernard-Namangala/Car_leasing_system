<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
class Car extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'car_name',
        'car_model',
        'car_details',
        'car_price'
    ];

    public function owner(){ 

       return $this->belongsTo(User::class);

    }

    public static function booted(){
        static::creating(function($car){
            $car->user_id = Auth::id();
        });
    }
  
}
