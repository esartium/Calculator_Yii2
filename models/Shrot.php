<?php

namespace app\models;

use yii\db\ActiveRecord;
use app\models\CalculatorForm;

$model = new CalculatorForm();

class Shrot extends ActiveRecord
{
    // public $stm;
    // public function stoimost($model) {
    //     switch ($model->month) {
    //     case 'январь':
    //         $stm = Shrot::find()
    //         ->where(['тоннаж' => $model->tonnazh])
    //         ->select(['январь']);
    //         break;

    //     case 'февраль':
    //         $stm = Shrot::find()
    //         ->where(['тоннаж' => $model->tonnazh])
    //         ->select(['февраль']);
    //         break;

    //     case 'август':
    //         $stm = Shrot::find()
    //         ->where(['тоннаж' => $model->tonnazh])
    //         ->select(['август']);
    //         break;

    //     case 'сентябрь':
    //         $stm = Shrot::find()
    //         ->where(['тоннаж' => $model->tonnazh])
    //         ->select(['сентябрь']);
    //         break;

    //     case 'октябрь':
    //         $stm = Shrot::find()
    //         ->where(['тоннаж' => $model->tonnazh])
    //         ->select(['октябрь']);
    //         break;

    //     case 'ноябрь':
    //         $stm = Shrot::find()
    //         ->where(['тоннаж' => $model->tonnazh])
    //         ->select(['ноябрь']);
    //         break;

    //     }
    //     return $this->stm;
    // }
}