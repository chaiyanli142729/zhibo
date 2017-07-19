<?
use yii\grid\GridView;
?>
<?= \yii\grid\GridView::widget([
    'dataProvider' => $dataProvider,
    'columns' => [
        [
            'class'=>'yii\grid\CheckboxColumn'
        ],
        'admin_id',
        'admin_name',
        'admin_pwd'
    ],
    'layout'=>"{items}\n{pager}"
]);?>