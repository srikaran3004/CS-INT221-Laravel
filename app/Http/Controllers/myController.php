<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class myController extends Controller
{
    public function returnstring(){
        return "Hello World";
    }

    public function routewithparameters($name,$age){
        return view('profile',['name'=>$name,'age'=>$age]);
    }
}
