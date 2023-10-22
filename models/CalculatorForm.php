<?php

namespace app\models;

use Yii;
use yii\base\Model;

class CalculatorForm extends Model
{
    public $raw_types;
    public $tonnazh;
    public $month;

    public $stoimost;

    public function rules() { //правила валидации
        return [
            // атрибут required указывает, что перечисленные поля обязательны для заполнения
            [['raw_types', 'tonnazh', 'month'], 'required', 'message' => 'это поле не может быть пустым']
        ];
        }

        public function price($raw_types, $tonnazh, $month) { //функция расчёта стоимости
            $prices =  \Yii::$app->params['prices'];
            $this->stoimost = $prices[$raw_types][$month][$tonnazh];
        }


} //главная скобка



