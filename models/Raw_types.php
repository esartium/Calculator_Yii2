<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "raw_types".
 *
 * @property int $id
 * @property string|null $raw_types
 *
 * @property Prices[] $prices
 */
class Raw_types extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'raw_types';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['raw_types'], 'string', 'max' => 5],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'raw_types' => 'Raw Types',
        ];
    }

    /**
     * Gets query for [[Prices]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPrices()
    {
        return $this->hasMany(Prices::class, ['raw_types_id' => 'id']);
    }
}
