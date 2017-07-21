<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use backend\controllers\CommonController;
class SendController extends CommonController
{

	/*
		礼物赠送记录列表
	 */
	public function actionList()
	{
		if($data = Yii::$app->request->post()){

		}else{
			return $this->render('list');
		}
	}

}