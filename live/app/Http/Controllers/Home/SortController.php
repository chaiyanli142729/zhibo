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
    	$info = Column::where('p_t_id','>','0')->get();
    	$parent = Column::where('p_t_id','0')->get();
    	
		return view('home/sort/index',['info'=>$info,'parent'=>$parent]);
	}
	
	public function sort($id){
//		echo $id;
    	$parent = Column::where('p_t_id','0')->get();
    	$info = Column::where('p_t_id',$id)->get();
		return view('home/sort/index',['info'=>$info,'parent'=>$parent]);
    	
		
	}
 
}