<?php
namespace backend\controllers;

use backend\models\Admin;
use yii;
use db;
use backend\models\AdminForm;
use yii\web\Controller;

class AdminController extends Controller{
    //public $layout=false; 
    public $defaultAction = 'log';

    public function actionIndex(){
        return $this->render('index');
    }


    //管理员登录
    public function actionLog(){
            $data = yii::$app->request->post();
            if(empty($data)){
                     $this->layout = false; 
                     $this->layout = "log"; 

                    $models = new AdminForm();
                    return $this->render('log',['models'=>$models]);
                    //return $this->render('login',['models'=>$models]);
            }else{
                     $admin_name = $data['AdminForm']['admin_name'];
                     $admin_pwd = $data['AdminForm']['admin_pwd'];
                    $info = Admin::find()->where(['admin_name' => $admin_name,'admin_pwd'=>$admin_pwd])->asArray()->one();   
                    //print_r($info);die;
                    if($info){
                            Yii::$app->session->set('admin',$info);
                            //$this->redirect('?r=admin/list');
                            $this->redirect('?r=cat/index');
                    }else{
                            $this->redirect('?r=admin/log');
                    }
            }
    }

    //管理员注册
    public function actionReg(){
    	$data = yii::$app->request->post();
    	if(empty($data)){
                      $this->layout = false; 
                      $this->layout = "reg"; 

	            $models = new AdminForm();
	            return $this->render('reg',['models'=>$models]);
                        //return $this->render('regist',['models'=>$models]);
           }else{
	            if (Yii::$app->request->isPost) {
	                    $admin = new Admin();
	                    $admin->admin_name = $data['AdminForm']['admin_name'];
	                    $admin->admin_pwd = $data['AdminForm']['admin_pwd'];
	                    $re = $admin->save();
	                    if($re){
	                        $this->redirect('?r=admin/log');
	                    }else{
	                        $this->redirect('?r=admin/reg');
	                        die;
	                    }
	            }else{
	                    $this->redirect('?r=admin/reg');
	                    die;
	                     }     
	 }
    }
    

    


                
            


        


    

    
}