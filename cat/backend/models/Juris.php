<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "juris".
 *
 * @property integer $juri_id
 * @property string $juri_contr
 */
class Juris extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'juris';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['juri_contr'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'juri_id' => 'Juri ID',
            'juri_contr' => 'Juri Contr',
        ];
    }
}
