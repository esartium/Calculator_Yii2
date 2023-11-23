<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "history".
 *
 * @property int $calculation_id
 * @property int $tonnage
 * @property string $month
 * @property string|null $raw_types
 * @property int $price
 */
class History extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */

     public $tonnage;
     public $month;
     public $raw_types;

     public $price;
    public static function tableName()
    {
        return 'history';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tonnage', 'month', 'price'], 'required'],
            [['tonnage', 'price'], 'integer'],
            [['month'], 'string', 'max' => 10],
            [['raw_types'], 'string', 'max' => 5],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'calculation_id' => 'Calculation ID',
            'tonnage' => 'Tonnage',
            'month' => 'Month',
            'raw_types' => 'Raw Types',
            'price' => 'Price',
        ];
    }
}
