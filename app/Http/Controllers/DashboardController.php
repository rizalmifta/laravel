<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public Function index(){
    	return view('dashboard');
    }
}
