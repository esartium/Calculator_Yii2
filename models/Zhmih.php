<?php

namespace app\models;

use yii\db\ActiveRecord;
use app\models\CalculatorForm;

class Zhmih extends ActiveRecord
{
    public function stoimost() {
        
        $calcc = new CalculatorForm();
        
        switch ($calcc->month) {
        case 'январь':
            $stm = Zhmih::find()
            ->where(['тоннаж' => $calcc->tonnazh])
            ->select(['январь']);
            break;

        case 'февраль':
            $stm = Zhmih::find()
            ->where(['тоннаж' => $calcc->tonnazh])
            ->select(['февраль']);
            break;

        case 'август':
            $stm = Zhmih::find()
            ->where(['тоннаж' => $calcc->tonnazh])
            ->select(['август']);
            break;

        case 'сентябрь':
            $stm = Zhmih::find()
            ->where(['тоннаж' => $calcc->tonnazh])
            ->select(['сентябрь']);
            break;

        case 'октябрь':
            $stm = Zhmih::find()
            ->where(['тоннаж' => $calcc->tonnazh])
            ->select(['октябрь']);
            break;

        case 'ноябрь':
            $stm = Zhmih::find()
            ->where(['тоннаж' => $calcc->tonnazh])
            ->select(['ноябрь']);
            break;

        }
        return $this->stm;
    }
}