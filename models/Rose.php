<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "rose".
 *
 * @property integer $currency
 */
class Rose extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'rose';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['currency'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'currency' => 'Currency',
        ];
    }
}
