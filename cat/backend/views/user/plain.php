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
        'uid',
        'uname',
        'pwd',
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
                </div>
            </div>
        </div>
    </div>s