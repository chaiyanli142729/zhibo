<?php
namespace backend\controllers;

use Yii;
use DB;
use yii\web\Controller;

class CommonController extends Controller
{
	public $admin;
	//添加数据
	 public function init(){
	 	parent::init();
		$res = $this->check();
		if($res==0){
			$this->redirect('?r=admin/log');
			return;
		}
	 }

	public function check(){
		$this->admin = Yii::$app->session->get('admin');
		//var_dump($this->admin);die;
		if($this->admin){
			return 1;
		}else{
			return 0;
		}
	}
	

}