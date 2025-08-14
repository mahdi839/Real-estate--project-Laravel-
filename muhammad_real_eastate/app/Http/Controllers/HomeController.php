<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class HomeController extends Controller
{
     public function frontEndIndex (){
        $properties = Property::take(6)->get();
        return view('frontEnd.home.home',compact('properties'));
     }
}
