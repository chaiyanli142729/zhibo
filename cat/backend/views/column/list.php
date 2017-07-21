<?
use yii\grid\GridView;
?>





<div class="main-content">
    <div class="page-content">
        <div class="row">
            <div class="col-xs-12">
                    <div class="form-group">
                        <div class="col-sm-20">
                            <div class="col-xs-20 col-sm-12">
                                <?= \yii\grid\GridView::widget([
                                    'dataProvider' => $dataProvider,
                                    'columns' => [
                                        [
                                            'class'=>'yii\grid\CheckboxColumn'
                                        ],
                                        'id',
                                        'column',
                                        'c_id',
                                        [
                                            'label'=>'封面图',
                                            'format'=>'raw',
                                            'value'=>function($m){
                                            return yii\helpers\Html::img($m->img,
                                            ['class' => 'img',
                                            'width' => 30]
                                            );
                                            }
                                        ],
                                        [
                                            'attribute'=>'add_time',
                                            'label'=>'添加时间',
                                            'format'=>['date','php:Y-m-d H:i:s']

                                        ]
                                    ],
                                    'layout'=>"{items}\n{pager}"
                                ]);?>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
