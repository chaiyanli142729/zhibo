<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$form = ActiveForm::begin([
    'id' => 'login-form',
    'options' => ['class' => 'form-horizontal',
        'enctype' => 'multipart/form-data',
    ],
    'action'=>'?r=admin/reg',
    'method'=>'post'
]) ?>
<?= $form->field($models, 'admin_name')->label('用户名') ?>
<?= $form->field($models, 'admin_pwd')->passwordInput()->label('密码') ?>

    <div class="form-group">
        <div class="col-lg-offset-1 col-lg-11">
            <?= Html::submitButton('注册', ['class' => 'btn btn-primary']) ?>
        </div>
    </div>
<?php ActiveForm::end() ?>