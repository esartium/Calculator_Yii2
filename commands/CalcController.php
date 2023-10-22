<?php

namespace app\commands;
use yii\console\Controller;
use yii\console\ExitCode;

class CalcController extends Controller {

    public $raw_types;
    public $tonnazh;
    public $month;
    public $stoimost;

    public function options($actionID) {
    $options = parent::options($actionID);
    if($actionID == 'calc') {
        $options[]='raw_types';
        $options[]='tonnazh';
        $options[]='month'; 
    }
    return $options;
    }

    public function actionCalc() {
        echo "вы ввели: " . "\n";
        echo "тип сырья: " . $this->raw_types. "\n";
        echo "тоннаж: " . $this->tonnazh . "\n";
        echo "месяц: " . $this->month . "\n";
        $prices = \Yii::$app->params['prices'];
        $this->stoimost = $prices[$this->raw_types][$this->month][$this->tonnazh];
        echo "стоимость: " . $this->stoimost;
        return ExitCode::OK; 
    }
    
    
}

