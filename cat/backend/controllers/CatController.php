<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use backend\controllers\CommonController;
class CatController extends CommonController
{

	/*
		首页
	 */
	public function actionIndex()
	{
		return $this->render('index');	
	}

}