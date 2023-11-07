<?php

namespace app\models;

use Yii;

class Raw_types extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return 'raw_types';
    }

    public function rules()
    {
        return [
            [['raw_types'], 'string', 'max' => 5],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'raw_types' => 'Raw Types',
        ];
    }

    public function getPrices()
    {
        return $this->hasMany(Prices::class, ['raw_types_id' => 'id']);
    }
}
