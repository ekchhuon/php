<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function hello(){
      echo "My Hello Worl!";
      return view('hello');
    }
}
