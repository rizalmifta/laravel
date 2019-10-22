<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public Function login(){
    	return view('halamanLogin');
    }
    public Function register(){
    	return view ('halamanRegister');
    }
}
