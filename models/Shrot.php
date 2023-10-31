<?php

namespace app\models;

use yii\db\ActiveRecord;
use app\models\CalculatorForm;

class Shrot extends ActiveRecord
{
    public $stm;
    public function stoimost() {

        $calcc = new CalculatorForm();
        
        switch ($calcc->month) {
        case 'январь':
            $stm = Shrot::find()
            ->where(['тоннаж' => $calcc->tonnazh])
            ->select(['январь']);
            break;

        case 'февраль':
            $stm = Shrot::find()
            ->where(['тоннаж' => $calcc->tonnazh])
            ->select(['февраль']);
            break;

        case 'август':
            $stm = Shrot::find()
            ->where(['тоннаж' => $calcc->tonnazh])
            ->select(['август']);
            break;

        case 'сентябрь':
            $stm = Shrot::find()
            ->where(['тоннаж' => $calcc->tonnazh])
            ->select(['сентябрь']);
            break;

        case 'октябрь':
            $stm = Shrot::find()
            ->where(['тоннаж' => $calcc->tonnazh])
            ->select(['октябрь']);
            break;

        case 'ноябрь':
            $stm = Shrot::find()
            ->where(['тоннаж' => $calcc->tonnazh])
            ->select(['ноябрь']);
            break;

        }
        return $this->stm;
    }
}