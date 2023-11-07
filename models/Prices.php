<?php

namespace app\models;

use Yii;

class Prices extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return 'prices';
    }

    public function rules()
    {
        return [
            [['raw_types_id', 'tonnage_id', 'month_id', 'prices'], 'required'],
            [['raw_types_id', 'tonnage_id', 'month_id', 'prices'], 'integer'],
            [['month_id'], 'exist', 'skipOnError' => true, 'targetClass' => Month::class, 'targetAttribute' => ['month_id' => 'id']],
            [['raw_types_id'], 'exist', 'skipOnError' => true, 'targetClass' => Raw_types::class, 'targetAttribute' => ['raw_types_id' => 'id']],
            [['tonnage_id'], 'exist', 'skipOnError' => true, 'targetClass' => Tonnage::class, 'targetAttribute' => ['tonnage_id' => 'id']],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'raw_types_id' => 'Raw Types ID',
            'tonnage_id' => 'Tonnage ID',
            'month_id' => 'Month ID',
            'prices' => 'Prices',
        ];
    }

    public function getMonth()
    {
        return $this->hasOne(Month::class, ['id' => 'month_id']);
    }

    public function getRawTypes()
    {
        return $this->hasOne(Raw_types::class, ['id' => 'raw_types_id']);
    }

    public function getTonnage()
    {
        return $this->hasOne(Tonnage::class, ['id' => 'tonnage_id']);
    }
}
