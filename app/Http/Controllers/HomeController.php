<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;

class HomeController extends Controller
{
   public function index(){
       // select * from Cars;
       $Cars = Car::all();
       dd($Cars);
       return view ('home');
   } //
}
