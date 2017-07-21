<?
use yii\grid\GridView;
?>
<div class="main-content">
<h1>这是主播审核页面</h1>
    <div class="page-content">
        <div class="row">
            <?= yii\grid\GridView::widget([
                'dataProvider' => $dataProvider,
                'columns' => [
                    [
                        'class'=>'yii\grid\CheckboxColumn'
                    ],
                    'uid',
                    'uname',
                    'pwd',
                    ['class' => 'yii\grid\ActionColumn', 'header' => '操作', 'template' => '{updatego} {update} ',
                    'buttons' => [
                        'update' => function ($url, $model) {
                            $url = "?r=user/start&id=" . $model->uid."&if_zb=2";
                            return yii\helpers\Html::a('<span class="glyphicon glyphicon-eye-open"></span>', $url, ['title' => '通过', 'target' => '_blank']);
                        },
                        'updatego' => function ($url, $model) {
                        	$url = "?r=user/start&id=" . $model->uid."&if_zb=0";
                            return yii\helpers\Html::a('<span class="glyphicon glyphicon-pencil"></span>', $url, ['title' => '', 'target' => '_blank']);
                        },
                            ],
                            'headerOptions' => ['width' => '300']
                        ],
                ],
                'layout'=>"{items}\n{pager}"
            ]);?>
        </div>
        
																
    </div>
</div>
