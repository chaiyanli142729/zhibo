<?php
namespace backend\controllers;

use Yii;
use DB;
use yii\web\Controller;
use yii\db\Query;
use app\models\Juris;
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
	//获取权限
	public function juri(){
		//从session中获取当前用户id
		$admin = yii::$app->session->get('admin');
		$admin_id = $admin['admin_id'];
		$admin_name = $admin['admin_name'];		
		//查询当前用户的角色
		$info = (new Query())->from('urs')
				->where(['uid'=>$admin_id])
				->all();
		$role_id = array();
		foreach($info as $k){
			$role_id[] = $k['role_id'];
		}
//		print_r($role_id);
		$role_ids = implode(',',$role_id);
//		var_dump($role);
//		//查询当前用户的权限ID
		$infos = (new Query())->from('rjs')
				->where(['in','role_id',[1,2,3]])
				->all();
		$ids = array();
		foreach($infos as $k){
			$ids[]=$k['juri_id'];
		}
		$i = implode(',',$ids);
//		//通过id查询权限控制器都有什么
		$po = Juris::find()->where(['in','juri_id',[1,2,4,6]])->asArray()->all();
//		print_r($po);
//		//存进session
		Yii::$app->session->set($admin_id,$po);
//		$this->rbac($admin_id);
		
	}
	//判断收有权限
//	public function rbac($id){
//		$ri = yii::$app->session->get($id);
////		print_r($ri);
////获取要访问的的控制器和方法
////		print_r($_SERVER);
//		$rb = $_SERVER['QUERY_STRING'];
////		echo $rb;
//		//判断有没有权限
//		foreach($ri as $k){
//			if($rb == $k['juri_contr']){
//				return $this->redirect('/?'.$rb);
//			}else{
//				return ;
//			}
//		}
//	}

}