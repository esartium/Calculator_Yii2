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

    public $st_final;

    public function rules() { //правила валидации
        return [
            [['raw_types', 'tonnazh', 'month'], 'required', 'message' => 'это поле не может быть пустым']
        ];
        }

        public $stmst;
    public function price() {
        if ($this->raw_types == 'шрот') {
            $stmst = new Shrot();
            $stmst->stoimost($this);
    } else if ($this->raw_types == 'соя') {
            $stmst = new Soya();
            $stmst->stoimost($this);
    } else {
        $stmst = new Zhmih();
        $stmst->stoimost($this);
    }
    $this->st_final = $stmst->stm;
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



