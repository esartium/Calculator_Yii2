<?php

namespace app\models;

use Yii;
// use yii\base\Model;
use yii\db\ActiveRecord;
use app\models\Soya;
use app\models\Zhmih;
use app\models\Shrot;
use app\controllers\SiteController;

class CalculatorForm extends ActiveRecord
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

        // public function price($raw_types, $tonnazh, $month) { //функция расчёта стоимости
        //     $prices =  \Yii::$app->params['prices'];
        //     $this->stoimost = $prices[$raw_types][$month][$tonnazh];
        // }

        // public function price () {
        //     switch ($this->raw_types) {
        //         case 'соя':
        //             $calc = new Soya();
        //             $this->stoimost = $calc->stm;
        //         break;
        //         case 'жмых':
        //             $calc = new Zhmih();
        //             $this->stoimost = $calc->stm;
        //         break;
        //         case 'шрот':
        //             $calc = new Shrot();
        //             $this->stoimost = $calc->stm;
        //         break;
        //     }
        //     return $this->stoimost;
        // }
        public function price() {
            switch ($this->raw_types) {
                case 'шрот':
                    switch ($this->month) {
                        case 'январь':
                            $this->stoimost = Shrot::find()
                            ->where(['тоннаж' => $this->tonnazh])
                            ->select(['январь']);
                            break;
                
                        case 'февраль':
                            $this->stoimost = Shrot::find()
                            ->where(['тоннаж' => $this->tonnazh])
                            ->select(['февраль']);
                            break;
                
                        case 'август':
                            $this->stoimost = Shrot::find()
                            ->where(['тоннаж' => $this->tonnazh])
                            ->select(['август']);
                            break;
                
                        case 'сентябрь':
                            $this->stoimost = Shrot::find()
                            ->where(['тоннаж' => $this->tonnazh])
                            ->select(['сентябрь']);
                            break;
                
                        case 'октябрь':
                            $this->stoimost = Shrot::find()
                            ->where(['тоннаж' => $this->tonnazh])
                            ->select(['октябрь']);
                            break;
                
                        case 'ноябрь':
                            $this->stoimost = Shrot::find()
                            ->where(['тоннаж' => $this->tonnazh])
                            ->select(['ноябрь']);
                            break;
                        }
                    
                break;

                case 'жмых':
                    switch ($this->month) {
                        case 'январь':
                            $this->stoimost = Zhmih::find()
                            ->where(['тоннаж' => $this->tonnazh])
                            ->select(['январь']);
                            break;
                
                        case 'февраль':
                            $this->stoimost = Zhmih::find()
                            ->where(['тоннаж' => $this->tonnazh])
                            ->select(['февраль']);
                            break;
                
                        case 'август':
                            $this->stoimost = Zhmih::find()
                            ->where(['тоннаж' => $this->tonnazh])
                            ->select(['август']);
                            break;
                
                        case 'сентябрь':
                            $this->stoimost = Zhmih::find()
                            ->where(['тоннаж' => $this->tonnazh])
                            ->select(['сентябрь']);
                            break;
                
                        case 'октябрь':
                            $this->stoimost = Zhmih::find()
                            ->where(['тоннаж' => $this->tonnazh])
                            ->select(['октябрь']);
                            break;
                
                        case 'ноябрь':
                            $this->stoimost = Zhmih::find()
                            ->where(['тоннаж' => $this->tonnazh])
                            ->select(['ноябрь']);
                            break;
                        }
                break;    
                    
                case 'соя': 
                    switch ($this->month) {
                        case 'январь':
                            $this->stoimost = Soya::find()
                            ->where(['тоннаж' => $this->tonnazh])
                            ->select(['январь']);
                            break;
                
                        case 'февраль':
                            $this->stoimost = Soya::find()
                            ->where(['тоннаж' => $this->tonnazh])
                            ->select(['февраль']);
                            break;
                
                        case 'август':
                            $this->stoimost = Soya::find()
                            ->where(['тоннаж' => $this->tonnazh])
                            ->select(['август']);
                            break;
                
                        case 'сентябрь':
                            $this->stoimost = Soya::find()
                            ->where(['тоннаж' => $this->tonnazh])
                            ->select(['сентябрь']);
                            break;
                
                        case 'октябрь':
                            $this->stoimost = Soya::find()
                            ->where(['тоннаж' => $this->tonnazh])
                            ->select(['октябрь']);
                            break;
                
                        case 'ноябрь':
                            $this->stoimost = Soya::find()
                            ->where(['тоннаж' => $this->tonnazh])
                            ->select(['ноябрь']);
                            break;
                        }
                break;
            }
            return $this->stoimost;
        }

        public function pricelist() {
            if ($this->raw_types == 'шрот') {
                require_once ('../views/site/tables/Shrot.html');
            } else if ($this->raw_types == 'жмых') {
                require_once ('../views/site/tables/Zhmih.html');
            } else {
                require_once ('../views/site/tables/Soya.html');
            }
        }

} //главная скобка



