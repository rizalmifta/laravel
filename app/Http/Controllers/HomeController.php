<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public Function home(){
    	return view('halamanHome');
    }
    public Function about(){
    	return view ('halamanAbout');
    }
    public Function service(){
    	return view ('halamanService');
    }
    public Function contact(){
    	return view ('halamanContact');
    }
  
}
