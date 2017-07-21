<?
use yii\grid\GridView;
?>
<div class="main-content">
    <div class="page-content">
        <div class="row">
            <?= yii\grid\GridView::widget([
                'dataProvider' => $dataProvider,
                'columns' => [
                    [
                        'class'=>'yii\grid\CheckboxColumn'
                    ],
                    'lw_id',
                    'lw_name',
                    'lw_price',
                    'attribute'=>'lw_img',
                    [
                        'attribute'=>'add_time',
                        'label'=>'添加时间',
                        'format'=>['date','php:Y-m-d H:i:s']

                    ],
                    [
                         'class' => 'yii\grid\ActionColumn',
                         'header' => '操作',
                         'template' => '{view} {update} {delete}',
                    ],
                ],
                'layout'=>"{items}\n{pager}"
            ]);?>
        </div>
    </div>
</div>
