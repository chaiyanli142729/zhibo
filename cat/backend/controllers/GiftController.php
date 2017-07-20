<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use backend\models\UploadForm;
use app\models\LbordLiwu;
use yii\web\UploadedFile;
use yii\data\ActiveDataProvider;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

class GiftController extends Controller
{

	/*
		礼物添加
	 */
    public function actionAdd()
    {
        $data = yii::$app->request->post();

        $model = new UploadForm();
        if (Yii::$app->request->isPost) {
            $model->img = UploadedFile::getInstance($model, 'img');
            $path = $model->upload();

            if (!($path == false)) {
                // 文件上传成功
                $LbordLiwu = new LbordLiwu();
                $LbordLiwu->lw_name = $data['LbordLiwu']['lw_name'];
                $LbordLiwu->lw_price = $data['LbordLiwu']['lw_price'];

                $LbordLiwu->add_time = time();
                $LbordLiwu->lw_img = $path;
                $re = $LbordLiwu->save();
                if ($re) {
                    $this->redirect('?r=gift/list');
                } else {
                    $this->redirect('?r=gift/add');
                    die;
                }
            }
        } else {
            $models = new LbordLiwu();
            $model = new UploadForm();
            return $this->render('add',['models'=>$models,'model'=>$model]);
        }
    }
	/*
		导航列表
	 */
	public function actionList()
	{
		if($data = Yii::$app->request->post()){

		}else{
            $query = LbordLiwu::find();
            $dataProvider = new ActiveDataProvider([
                'query'=>$query,
                'pagination'=>[
                    'pagesize'=>10
                ]
            ]);
            return $this->render('list',['dataProvider'=>$dataProvider]);
		}
	}

	/*
		导航修改
	 */
	public function actionSave()
	{
		if($data = Yii::$app->request->post()){

		}else{
			return $this->render('save');
		}
	}

	/*
		礼物删除
	 */
	public function actionDelete()
    {
        $id = $_GET['id'];
        $i = yii::$app->db->createCommand()->delete('lbord_liwu',"lw_id = $id")->execute();

        if($i){
            return $this->actionList();

        }else{
            echo "<script>alert('删除失败')</script>";
            return $this->actionList();

        }

    }

}