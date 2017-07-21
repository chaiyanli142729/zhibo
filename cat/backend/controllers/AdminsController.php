<?php
namespace backend\controllers;

use backend\models\Admin;
use yii;
use db;
use backend\models\AdminForm;
use yii\web\Controller;
use backend\controllers\CommonController;

class AdminsController extends CommonController{
   
    //管理员列表展示
    public function actionList(){
            $query = Admin::find();
            $dataProvider = new yii\data\ActiveDataProvider([
                'query'=>$query,
                'pagination'=>[
                    'pagesize'=>10
                ]
            ]);
            return $this->render('list',['dataProvider'=>$dataProvider]);
    }

    //管理员退出
    public function actionLogout(){
    	//echo 99999;die;
            $session = Yii::$app->session;
	  $session->remove('admin');
            
            $this->redirect('?r=admin/log');

    }
}