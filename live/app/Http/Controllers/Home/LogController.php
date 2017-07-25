<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

//引用对应的命名空间
use Gregwar\Captcha\CaptchaBuilder;
use Session;
use Illuminate\Support\Facades\Input;
class LogController extends Controller
{
    public function wer_add(){
//        $username=Request::input("username");
//        $password=Request::input("password");

        $username=Input::get("username");
        $password=Input::get("password");
//        echo $username;
//        echo $password;

        //读取验证码
        $captcha = Session::get('milkcaptcha');
        //echo $captcha;
        if(Input::get("captcha")==$captcha){
            //$results = DB::table('select * from lbord_user where username = ? and password = ? ',array($username,$password));
            $results = DB::table('lbord_user')->where(['uname'=>$username,'pwd'=>$password])->get();
            //var_dump($results);die;
            if(empty($results)){
                echo '用户名或密码错误';
            }else{
                $userid=$results[0]->uid;
                Session::put('username',$username);
                Session::put('uid',$userid);

                echo '登陆成功';
                return redirect('/');
            }
            //echo '登陆成功';
        }else{
            echo '验码错误';
        }
    }
    public function captcha($tmp)
    {
        //生成验证码图片的Builder对象，配置相应属性
        $builder = new CaptchaBuilder;
        //可以设置图片宽高及字体
        $builder->build($width = 100, $height = 40, $font = null);
        //获取验证码的内容
        $phrase = $builder->getPhrase();

        //把内容存入session
        Session::flash('milkcaptcha', $phrase);
        //生成图片
        header("Cache-Control: no-cache, must-revalidate");
        header('Content-Type: image/jpeg');
        $builder->output();
    }


    public function log()
    {
        $data = $_POST;
        if(empty($data)){
        	return view('home/log/login');
            //return view('home/log/log');
        }else{
        	var_dump($data);
        }
        
    }

    public function reg()
    {
        return view('home/log/register');
    }
}