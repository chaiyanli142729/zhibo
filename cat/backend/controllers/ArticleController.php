<?php
namespace backend\controllers;

use Yii;
use DB;
use yii\db\Query;
use yii\web\Controller; 
use backend\models\Article;
use backend\controllers\CommonController;
class ArticleController extends CommonController
{
	public $enableCsrfValidation = false;

	/*
		首页
	 */
	//添加 
	public function actionIndex()
	{
		if(empty($_POST)){
			return $this->render('add');
		}else{
			$info = $_POST;
			$info['news_addtime']=time();
//			print_r($info);die;
			$sql = yii::$app->db->createCommand()->insert('lbord_news',$info)->execute();
			
			if($sql){
				return $this->actionShow();	
			}else{
				return $this->render('adds');
				
			}
		}
			
	}
	
	public function actionShow(){
		if(isset($_GET['per'])){
			$per = $_GET['per'];
			
		}else{
			$per = 1;
			
		}
		$query = new Query();
		$sum = (new \yii\db\Query())
    			->from('lbord_news')
    			->count();
    	
//		print_r($sum);die;
		
		$limit = 3;
		$num = ceil($sum/$limit);
		$lim = 0;
		if($per == $num){
			
			$lim = $sum - ($per-1)*$limit;
		}else{
			$lim = $limit;
			
		}
//		echo $lim;
//		echo $per;die;
		$i = ($per-1)*$limit;
//		echo $i; echo $lim;
//		print_r($num);die;
		$info = (new \yii\db\Query())
   			 ->from('lbord_news')
   			 ->limit($lim)
   			 ->offset($i)
   			 ->all();
		return $this->render('show',['info'=>$info,'num'=>$num]);
	}
	
	public function actionDel(){
		
		$id = $_GET['id'];
		$i = yii::$app->db->createCommand()->delete('lbord_news',"news_id = $id")->execute();

		if($i){
			return $this->actionShow();

		}else{
			echo "<script>alert('删除失败')</script>";
			return $this->actionShow();

		}
	}
	
	public function actionUp(){
		
		if(isset($_GET['id'])){
			$id = $_GET['id'];
			$db = (new Query())->from('lbord_news')
				->where(['news_id'=>$id])
				->one();
			return $this->render('up',['data'=>$db]);
		}else{
			$info = $_POST;
			$id= $info['news_id'];
//			unset($info['id']);
			$i = yii::$app->db->createCommand()->update('lbord_news',$info,"news_id =$id")->execute();
			if($i){
				echo "s";
			}else{
				echo "p";
			}
		}
	}
	
	

}