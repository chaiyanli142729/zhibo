<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$form = ActiveForm::begin([
    'options' => ['class' => 'form-horizontal',
        'enctype' => 'multipart/form-data',
    ],
    'action'=>'?r=gift/add',
    'method'=>'post',
]) ?>s

<div class="main-content">
    <div class="breadcrumbs" id="breadcrumbs">

        <ul class="breadcrumb">
            <li>
                <i class="icon-home home-icon"></i>
                <a href="#">礼物管理</a>
            </li>
            <li class="active">礼物添加</li>
        </ul><!-- .breadcrumb -->

    </div>

    <div class="page-content">
        <div class="page-header">
        </div><!-- /.page-header -->

        <div class="row">
            <div class="col-xs-12">
                <!-- PAGE CONTENT BEGINS -->

                <form class="form-horizontal" role="form">
                    <div class="form-group">
                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1">  </label>

                        <div class="col-sm-9">
                            <div class="col-xs-12 col-sm-3">
                                <?= $form->field($models, 'lw_name')->label('礼物名称') ?>
                                <?= $form->field($models, 'lw_price')->label('礼物价格') ?>
                                <?= $form->field($model, 'img')->fileInput()->label('图片上传') ?>

                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-lg-offset-1 col-lg-11">
                            <?= Html::submitButton('添加', ['class' => 'btn btn-primary']) ?>
                        </div>
                    </div>

                    <!-- PAGE CONTENT ENDS -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div>
</div>

<?php ActiveForm::end() ?>








