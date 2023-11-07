<?php

namespace app\models;

use Yii;

class Month extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return 'month';
    }

    public function rules()
    {
        return [
            [['month'], 'required'],
            [['month'], 'string', 'max' => 10],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'month' => 'Month',
        ];
    }

    public function getPrices()
    {
        return $this->hasMany(Prices::class, ['month_id' => 'id']);
    }
}
