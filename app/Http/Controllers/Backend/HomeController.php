<?php

namespace App\Http\Controllers\Backend;

use View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    //
    	public function __construct()
	    {
	        $this->middleware('auth:admin');
	    }
    	
  		public function layout(){
	 		return view('layouts.backend');
	 	}
	 	
	 	public function index(){
	 		return view('home.index');
	 	}
}
