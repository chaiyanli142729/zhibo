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
			$sql = yii::$app->db->createCommand()->insert('lbord_news',$info)->execute();
			
			if($sql){
				return $this->actionShow();
			}else{
				return $this->render('adds');
				
			}
		}
			
	}
	
	public function actionShow(){
		$query = new Query();
		$info = $query->from('lbord_news')->all();
		return $this->render('show',['info'=>$info]);
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