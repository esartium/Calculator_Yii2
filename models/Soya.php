<?php

namespace app\models;

use yii\db\ActiveRecord;
use app\models\CalculatorForm;


class Soya extends ActiveRecord
{
    // public function stoimost() {

    //     $calcc = new CalculatorForm();
        
    //     switch ($calcc->month) {
    //     case 'январь':
    //         $stm = Soya::find()
    //         ->where(['тоннаж' => $calcc->tonnazh])
    //         ->select(['январь']);
    //         break;

    //     case 'февраль':
    //         $stm = Soya::find()
    //         ->where(['тоннаж' => $calcc->tonnazh])
    //         ->select(['февраль']);
    //         break;

    //     case 'август':
    //         $stm = Soya::find()
    //         ->where(['тоннаж' => $calcc->tonnazh])
    //         ->select(['август']);
    //         break;

    //     case 'сентябрь':
    //         $stm = Soya::find()
    //         ->where(['тоннаж' => $calcc->tonnazh])
    //         ->select(['сентябрь']);
    //         break;

    //     case 'октябрь':
    //         $stm = Soya::find()
    //         ->where(['тоннаж' => $calcc->tonnazh])
    //         ->select(['октябрь']);
    //         break;

    //     case 'ноябрь':
    //         $stm = Soya::find()
    //         ->where(['тоннаж' => $calcc->tonnazh])
    //         ->select(['ноябрь']);
    //         break;

    //     }
    //     return $this->stm;
    // }
}
