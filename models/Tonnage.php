<?php

namespace app\models;
use yii\behaviors\TimestampBehavior;
use Yii;

class Tonnage extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return 'tonnage';
    }

    public function rules()
    {
        return [
            [['tonnage'], 'required'],
            [['tonnage'], 'integer'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tonnage' => 'Tonnage',
        ];
    }

    public function getPrices()
    {
        return $this->hasMany(Prices::class, ['tonnage_id' => 'id']);
    }

}
