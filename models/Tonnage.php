<?php

namespace app\models;
// use yii\behaviors\TimestampBehavior;
use Yii;

/**
 * This is the model class for table "tonnage".
 *
 * @property int $id
 * @property int $tonnage
 *
 * @property Prices[] $prices
 */
class Tonnage extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tonnage';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tonnage'], 'required'],
            [['tonnage'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tonnage' => 'Tonnage',
        ];
    }

    /**
     * Gets query for [[Prices]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPrices()
    {
        return $this->hasMany(Prices::class, ['tonnage_id' => 'id']);
    }

    // public function behaviors()
    // {
    //     return [
    //         [
    //             'class' => TimestampBehavior::className(),
    //             'createdAtAttribute' => 'created_at',
    //             'updatedAtAttribute' => 'updated_at',
    //             'value' => function(){ return date('Y-m-d');},
    //         ],
    //     ];
    // }
}
