<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/4/26
 * Time: 20:49
 */

namespace backend\models;
use yii\db\ActiveRecord;

class Admin extends ActiveRecord{
    public static function tableName()
    {
        return 'admin';
    }


    public function attributeLabels()
    {
        return [
            'admin_id' => 'ID',
            'admin_name' => '管理员用户名',
            'admin_pwd' => '管理员密码'
        ];
    }
}