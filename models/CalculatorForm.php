<?php

namespace app\models;

use Yii;
use yii\base\Model;

// require_once('../config/Shrot.php');
// require_once('../config/Soya.php');
// require_once('../config/Zhmih.php');

class CalculatorForm extends Model
{
    public $raw_types;
    public $tonnazh;
    public $month;

    // public function attributeLabels()
    // {
    //     return [
    //         'raw_types' => 'тип сырья',
    //         'tonnazh' => 'тоннаж',
    //         'month' => 'месяц',
    //     ];
    // } 
    // это функция, возвращающая нам массив,
    // где ключи - названия полей, а значения - их лейблы 

    public function rules() { //правила валидации
        return [
            // атрибут required указывает, что перечисленные поля обязательны для заполнения
            [['raw_types', 'tonnazh', 'month'], 'required', 'message' => 'это поле не может быть пустым']
        ];
        }

    




}