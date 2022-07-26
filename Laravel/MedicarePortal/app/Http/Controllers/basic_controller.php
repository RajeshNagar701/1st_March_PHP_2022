<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class basic_controller extends Controller
{
    public function index()
	{
		return view('Website.index');
	}
	
	
}
