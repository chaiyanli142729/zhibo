<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/4/26
 * Time: 20:49
 */

namespace backend\models;


use yii\base\Model;

class AdminForm extends Model{
    public $admin_name;
    public $admin_pwd;

    public function rules()
    {
        return [
            // 在这里定义验证规则
            [['admin_name','admin_pwd'],'required']
        ];
    }

    public function attributeLable()
    {
        return [
            // 在这里定义验证规则
            [['admin_name','admin_pwd'],'required']
        ];
    }
}