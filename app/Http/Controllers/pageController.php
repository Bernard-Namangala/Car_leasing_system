<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pageController extends Controller
{
    public function index() {
      $title = "Welcome to the Automated Car Leasing System";
      $info = "This Website Comes through for individuals who need cars for a certain period of time.
                It connects clients(leasse) to various lessors from different locations within the country.";
      return view('pages.index', compact('title', 'info'));
    }

    public function navigation() {
      $para = "Cars Available";
      return view('pages.navigation', compact('para'));
    }

    public function getCar(){
      return view('pages.getCar');
    }
}
