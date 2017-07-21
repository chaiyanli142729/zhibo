<?php
namespace backend\controllers;

use Yii;
use DB;
use yii\web\Controller;
use yii\db\Query;
class CommonController extends Controller
{
	public $admin;
	//添加数据
	 public function init(){
	 	parent::init();
	 	$this->juri();
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
	
	public function juri(){
		$admin = yii::$app->session->get('admin');
		$admin_id = $admin['admin_id'];
		$info = (new Query())->from('urs')
				->where(['uid'=>$admin_id])
				->one();
		$role_id = $info['role_id'];
		$infos = (new Query())->from('rjs')
				->where(['role_id'=>$role_id])
				->all();
				
		$ids = array();
		foreach($infos as $k){
			$ids[]=$k['juri_id'];
		}
		$i = implode(',',$ids);
//		$s = $i.substr(0,1);
		print_r($i);
//		print_r($s);
		$in = yii::$app->db->createCommand("select * from juris where juri_id in ($i)")->queryAll();
//		$in = (new Query())->from('juris')
//				->where(['juri_id'=>[$i]])
//				->all();
		
		
	}
	

}