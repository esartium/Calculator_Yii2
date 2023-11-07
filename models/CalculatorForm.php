<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\db\ActiveRecord;

class CalculatorForm extends Model
{
    public $raw_types;
    public $tonnage;
    public $month;

    public $stoimost;

    public function rules() {
        return [
            [['raw_types', 'tonnage', 'month'], 'required', 'message' => 'это поле не может быть пустым']
        ];
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
} 



