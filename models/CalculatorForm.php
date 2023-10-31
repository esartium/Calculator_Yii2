<?php

namespace app\models;

use Yii;
// use yii\base\Model;
use yii\db\ActiveRecord;

use app\models\Zhmih;
use app\models\Shrot;
use app\models\Soya;
use app\controllers\SiteController;

class CalculatorForm extends ActiveRecord
{
    public $raw_types;
    public $tonnazh;
    public $month;

    public $stoimost;

    public function rules() { //правила валидации
        return [
            [['raw_types', 'tonnazh', 'month'], 'required', 'message' => 'это поле не может быть пустым']
        ];
        }

    // public function price() {
    //     switch ($this->raw_types) {
    //                 // case 'соя':
    //                 //     $calc = new Soya();
    //                 //     $this->stoimost = $calc->stm;
    //                 // break;
    //                 case 'жмых':
    //                     $calc = new Zhmih();
    //                     $this->stoimost = $calc->stm;
    //                 break;
    //                 case 'шрот':
    //                     $calc = new Shrot();
    //                     $this->stoimost = $calc->stm;
    //                 break;
    //             }
    //             return $this->stoimost;
    //         }
    











        public $sto;

        
        public function price($raw_types, $tonnazh, $month) {
            switch ($raw_types) {
                case 'шрот':
                    switch ($month) {
                        case 'январь':
                            $this->sto = Shrot::find()
                            ->where(['тоннаж' => $tonnazh])
                            ->select(['январь']);
                            $this->stoimost = $this->sto->январь;
                            break;
                
                        case 'февраль':
                            $this->stoimost = Shrot::find()
                            ->where(['тоннаж' => $tonnazh])
                            ->select(['февраль']);
                            break;
                
                        case 'август':
                            $this->stoimost = Shrot::find()
                            ->where(['тоннаж' => $tonnazh])
                            ->select(['август']);
                            break;
                
                        case 'сентябрь':
                            $this->stoimost = Shrot::find()
                            ->where(['тоннаж' => $tonnazh])
                            ->select(['сентябрь']);
                            break;
                
                        case 'октябрь':
                            $this->stoimost = Shrot::find()
                            ->where(['тоннаж' => $tonnazh])
                            ->select(['октябрь']);
                            break;
                
                        case 'ноябрь':
                            $this->stoimost = Shrot::find()
                            ->where(['тоннаж' => $tonnazh])
                            ->select(['ноябрь']);
                            break;
                        }
                    
                break;

                case 'жмых':
                    switch ($month) {
                        case 'январь':
                            $this->stoimost = Zhmih::find()
                            ->where(['тоннаж' => $tonnazh])
                            ->select(['январь']);
                            break;
                
                        case 'февраль':
                            $this->stoimost = Zhmih::find()
                            ->where(['тоннаж' => $tonnazh])
                            ->select(['февраль']);
                            break;
                
                        case 'август':
                            $this->stoimost = Zhmih::find()
                            ->where(['тоннаж' => $tonnazh])
                            ->select(['август']);
                            break;
                
                        case 'сентябрь':
                            $this->stoimost = Zhmih::find()
                            ->where(['тоннаж' => $tonnazh])
                            ->select(['сентябрь']);
                            break;
                
                        case 'октябрь':
                            $this->stoimost = Zhmih::find()
                            ->where(['тоннаж' => $tonnazh])
                            ->select(['октябрь']);
                            break;
                
                        case 'ноябрь':
                            $this->stoimost = Zhmih::find()
                            ->where(['тоннаж' => $tonnazh])
                            ->select(['ноябрь']);
                            break;
                        }
                break;    
                    
                case 'соя': 
                    switch ($month) {
                        case 'январь':
                            $this->stoimost = Soya::find()
                            ->where(['тоннаж' => $tonnazh])
                            ->select(['январь']);
                            break;
                
                        case 'февраль':
                            $this->stoimost = Soya::find()
                            ->where(['тоннаж' => $tonnazh])
                            ->select(['февраль']);
                            break;
                
                        case 'август':
                            $this->stoimost = Soya::find()
                            ->where(['тоннаж' => $tonnazh])
                            ->select(['август']);
                            break;
                
                        case 'сентябрь':
                            $this->stoimost = Soya::find()
                            ->where(['тоннаж' => $tonnazh])
                            ->select(['сентябрь']);
                            break;
                
                        case 'октябрь':
                            $this->stoimost = Soya::find()
                            ->where(['тоннаж' => $tonnazh])
                            ->select(['октябрь']);
                            break;
                
                        case 'ноябрь':
                            $this->stoimost = Soya::find()
                            ->where(['тоннаж' => $tonnazh])
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



