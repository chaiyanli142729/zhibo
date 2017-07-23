<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\New;
class IndexController extends Controller
{
    public function index()
    {
		New::all();
    	return view('home/index/index');
    }
}