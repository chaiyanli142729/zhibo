<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Column;
class SortController extends Controller
{
    public function index()
    {
    	
		return view('home/sort/index');
	}
 
}