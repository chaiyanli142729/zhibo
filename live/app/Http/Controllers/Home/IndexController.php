<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Article;
use App\Column;
class IndexController extends Controller
{
    public function index()
    {
//		echo "1";die;
		$inf = Article::all();
		$info = json_decode(json_encode($inf),true);
		$colum = Column::where('p_t_id','0')->get();
		$hot = Column::where('hot','1')->limit(12)->get();
		$hots =json_decode(json_encode($hot),true);
		$col =json_decode(json_encode($colum),true);
//		print_r($col);die;
    	return view('home/index/index',['info'=>$info,'column'=>$col,'hot'=>$hots]);
    }
 
}