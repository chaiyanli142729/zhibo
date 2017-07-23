<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "lbord_liwu".
 *
 * @property integer $lw_id
 * @property string $lw_name
 * @property string $lw_price
 * @property string $lw_img
 */
class LbordLiwu extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'lbord_liwu';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['lw_name', 'lw_price', 'lw_img'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'lw_id' => '礼物编号',
            'lw_name' => '礼物名称',
            'lw_price' => '礼物价格',
            'lw_img' => '图片',
        ];
    }
}
