<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "history".
 *
 * @property int $calculation_id
 * @property string|null $username
 * @property int $tonnage
 * @property string $month
 * @property string $raw_types
 * @property int $price
 * @property string|null $created_at
 */
class History extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
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
            [['tonnage', 'month', 'raw_types', 'price'], 'required'],
            [['tonnage', 'price'], 'integer'],
            [['created_at'], 'safe'],
            [['username'], 'string', 'max' => 35],
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
            'calculation_id' => 'ID расчёта',
            'username' => 'Кто произвёл расчёт',
            'tonnage' => 'Тоннаж',
            'month' => 'Месяц',
            'raw_types' => 'Тип сырья',
            'price' => 'Стоимость доставки',
            'created_at' => 'Дата расчёта',
        ];
    }
}
