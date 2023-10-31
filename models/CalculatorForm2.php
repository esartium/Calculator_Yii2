<?php

namespace app\models;

use Yii;
// use yii\base\Model;
use yii\db\ActiveRecord;
use app\models\Shrot;

use app\controllers\SiteController;

class CalculatorForm2 extends ActiveRecord
{
    // public $raw_types;
    // public $tonnazh;
    // public $month;

    // public $stoimost;

    // public function rules() { //правила валидации
    //     return [
    //         // атрибут required указывает, что перечисленные поля обязательны для заполнения
    //         [['raw_types', 'tonnazh', 'month'], 'required', 'message' => 'это поле не может быть пустым']
    //     ];
    //     }

    // public function price() {
    //     switch ($this->raw_types) {
    //                 case 'соя':
    //                     $calc = new Soya();
    //                     $this->stoimost = $calc->stm;
    //                 break;
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
    //         public function pricelist() {
    //             if ($this->raw_types == 'шрот') {
    //                 require_once ('../views/site/tables/Shrot.html');
    //             } else if ($this->raw_types == 'жмых') {
    //                 require_once ('../views/site/tables/Zhmih.html');
    //             } else {
    //                 require_once ('../views/site/tables/Soya.html');
    //             }
    //         }
    }
