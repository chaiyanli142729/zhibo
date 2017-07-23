<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "lbord_user".
 *
 * @property integer $uid
 * @property string $uname
 * @property string $pwd
 * @property integer $if_zb
 */
class LbordUser extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'lbord_user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['if_zb'], 'integer'],
            [['uname', 'pwd'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'uid' => 'Uid',
            'uname' => 'Uname',
            'pwd' => 'Pwd',
            'if_zb' => 'If Zb',
        ];
    }
}
