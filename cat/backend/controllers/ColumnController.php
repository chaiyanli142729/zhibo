<?php
namespace backend\controllers;
use Yii;
use yii\db;
use app\models\LbordColumn;
use yii\web\Controller;
use backend\models\UploadForm;
use yii\web\UploadedFile;
use yii\data\ActiveDataProvider;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;


class ColumnController extends Controller
{
	/*
		栏目添加
	 */
	public function actionAdd()
	{
        $data = yii::$app->request->post();

        $model = new UploadForm();
        if (Yii::$app->request->isPost)
        {
            $model->img = UploadedFile::getInstance($model, 'img');
            $path = $model->upload();

            if (!($path==false))
            {
                // 文件上传成功
                $LbordColumn = new LbordColumn();
                $LbordColumn->c_id = $data['LbordColumn']['c_id'];
                $LbordColumn->column =$data['LbordColumn']['column'];

                $LbordColumn->add_time = time();
                $LbordColumn->img = $path;
                $re = $LbordColumn->save();
                if($re)
                {
                    $this->redirect('?r=column/list');
                }
                else
                {
                    $this->redirect('?r=column/add');
                    die;
                }
            }
        }
		else
		{
            $models = new LbordColumn();
            $model = new UploadForm();
            $status = LbordColumn::find()->asArray()->all();//数组格式
            return $this->render('add',['models'=>$models,'model'=>$model,'data'=>$status]);
		}
	}
	/*
		栏目列表
	 */
	public function actionList()
	{
		if($data = Yii::$app->request->post())
        {

		}
        else
        {
            $query = LbordColumn::find();
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
		栏目修改
	 */
	public function actionSave()
	{
		if($data = Yii::$app->request->post()){

		}else{
			return $this->render('save');
		}
	}

	/*
		栏目删除
	 */
	public function actionDelete()
	{
        $id = $_GET['id'];
        $i = yii::$app->db->createCommand()->delete('lbord_column',"id = $id")->execute();

        if($i){
            return $this->actionList();

        }else{
            echo "<script>alert('删除失败')</script>";
            return $this->actionList();

        }

	}

}