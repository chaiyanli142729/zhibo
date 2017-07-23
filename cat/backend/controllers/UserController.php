<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use app\models\LbordUser;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\data\ActiveDataProvider;
use backend\controllers\CommonController;
class UserController extends CommonController
{

	/*
		管理员列表
	 */
	public function actionAdmin()
	{
		if($data = Yii::$app->request->post()){

		}else{
			return $this->render('admin');
		}
	}

	/*
		普通用户列表
	 */
	public function actionPlain(){
            $query = LbordUser::find();
            $dataProvider = new ActiveDataProvider([
                'query'=>$query,
                'pagination'=>[
                    'pagesize'=>10
                ]
            ]);
            return $this->render('plain',['dataProvider'=>$dataProvider]);
    }

	/*
		主播待审核列表
	 */
	public function actionWait()
	{
		if($data = Yii::$app->request->post()){

		}else{

			$query = LbordUser::find()->where(['if_zb'=>1]);
            $dataProvider = new ActiveDataProvider([
                'query'=>$query,
                'pagination'=>[
                    'pagesize'=>10
                ]
            ]);
            return $this->render('wait',['dataProvider'=>$dataProvider,'model'=>$query]);
		}
	}

	/*
		主播已审核列表
	 */
	public function actionStart()
	{
		if($data = Yii::$app->request->get()){
			$id=$_GET['id'];
			$if_zb=$_GET['if_zb'];

			$res = LbordUser::find()->where(['uid'=>$id])->one();
			$res -> if_zb = $if_zb;
            $re=$res -> save();
			if(!$re){
				return $this->actionWait();	
			}else{
				return $this->actionWait();
				
			}

		}else{
			return $this->render('start');
		}
	}

	public function actionDelete()
    {
        $id = $_GET['id'];
        $i = yii::$app->db->createCommand()->delete('lbord_user',"uid = $id")->execute();

        if($i){
            return $this->actionPlain();

        }else{
            echo "<script>alert('删除失败')</script>";
            return $this->actionPlain();

        }

    }
}