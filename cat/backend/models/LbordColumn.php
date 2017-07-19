<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "lbord_column".
 *
 * @property integer $id
 * @property string $column
 * @property integer $c_id
 * @property string $img
 */
class LbordColumn extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'lbord_column';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['c_id'], 'integer'],
            [['column', 'img'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'column' => 'Column',
            'c_id' => 'C ID',
            'img' => 'Img',
        ];
    }
}
