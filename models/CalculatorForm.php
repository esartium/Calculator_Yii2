<?php

namespace app\models;

use Yii;
use yii\base\Model;

require_once('../config/Shrot.php');
require_once('../config/Soya.php');
require_once('../config/Zhmih.php');
// require_once('../config/prices.php');

class CalculatorForm extends Model
{
    public $raw_types;
    public $tonnazh;
    public $month;

    public $stoimost;

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


    public function price($raw_types, $tonnazh, $month, $stoimost) {
    if ($raw_types == 'соя') {
        $ob = new \Soya();
        if ($month == 'январь') {
                if ($tonnazh == '25') {
                    $stoimost = $ob->yanvar["25"];
                } else if ($tonnazh == '50') {
                    $stoimost = $ob->yanvar["50"];
                } else if ($tonnazh == '75') {
                    $stoimost = $ob->yanvar["75"];
                } else {
                    $stoimost = $ob->yanvar["100"];
                }
        } else if ($month == 'февраль') {
            if ($tonnazh == '25') {
                $stoimost = $ob->fevral["25"];
            } else if ($tonnazh == '50') {
                $stoimost = $ob->fevral["50"];
            } else if ($tonnazh == '75') {
                $stoimost = $ob->fevral["75"];
            } else {
                $stoimost = $ob->fevral["100"];
            }
        } else if ($month == 'август') {
            if ($tonnazh == '25') {
                $stoimost = $ob->avgust["25"];
            } else if ($tonnazh == '50') {
                $stoimost = $ob->avgust["50"];
            } else if ($tonnazh == '75') {
                $stoimost = $ob->avgust["75"];
            } else {
                $stoimost = $ob->avgust["100"];
            }
        }
        else if ($month == 'сентябрь') {
            if ($tonnazh == '25') {
                $stoimost = $ob->sentbr["25"];
            } else if ($tonnazh == '50') {
                $stoimost = $ob->sentbr["50"];
            } else if ($tonnazh == '75') {
                $stoimost = $ob->sentbr["75"];
            } else {
                $stoimost = $ob->sentbr["100"];
            }
        }
        else if ($month == 'октябрь') {
            if ($tonnazh == '25') {
                $stoimost = $ob->octbr["25"];
            } else if ($tonnazh == '50') {
                $stoimost = $ob->octbr["50"];
            } else if ($tonnazh == '75') {
                $stoimost = $ob->octbr["75"];
            } else {
                $stoimost = $ob->octbr["100"];
            }
        } else {
            if ($tonnazh == '25') {
                $stoimost = $ob->november["25"];
            } else if ($tonnazh == '50') {
                $stoimost = $ob->november["50"];
            } else if ($tonnazh == '75') {
                $stoimost = $ob->november["75"];
            } else {
                $stoimost = $ob->november["100"];
            }
        }
    } else if ($raw_types == 'shrot') {
        $ob2 = new \Shrot;
        if ($month == 'январь') {
                if ($tonnazh == '25') {
                    $stoimost = $ob2->yanvar["25"];
                } else if ($tonnazh == '50') {
                    $stoimost = $ob2->yanvar["50"];
                } else if ($tonnazh == '75') {
                    $stoimost = $ob2->yanvar["75"];
                } else {
                    $stoimost = $ob2->yanvar["100"];
                }
        } else if ($month == 'февраль') {
            if ($tonnazh == '25') {
                $stoimost = $ob2->fevral["25"];
            } else if ($tonnazh == '50') {
                $stoimost = $ob2->fevral["50"];
            } else if ($tonnazh == '75') {
                $stoimost = $ob2->fevral["75"];
            } else {
                $stoimost = $ob2->fevral["100"];
            }
        } else if ($month == 'август') {
            if ($tonnazh == '25') {
                $stoimost = $ob2->avgust["25"];
            } else if ($tonnazh == '50') {
                $stoimost = $ob2->avgust["50"];
            } else if ($tonnazh == '75') {
                $stoimost = $ob2->avgust["75"];
            } else {
                $stoimost = $ob2->avgust["100"];
            }
        }
        else if ($month == 'сентябрь') {
            if ($tonnazh == '25') {
                $stoimost = $ob2->sentbr["25"];
            } else if ($tonnazh == '50') {
                $stoimost = $ob2->sentbr["50"];
            } else if ($tonnazh == '75') {
                $stoimost = $ob2->sentbr["75"];
            } else {
                $stoimost = $ob2->sentbr["100"];
            }
        }
        else if ($month == 'октябрь') {
            if ($tonnazh == '25') {
                $stoimost = $ob2->octbr["25"];
            } else if ($tonnazh == '50') {
                $stoimost = $ob2->octbr["50"];
            } else if ($tonnazh == '75') {
                $stoimost = $ob2->octbr["75"];
            } else {
                $stoimost = $ob2->octbr["100"];
            }
        } else {
            if ($tonnazh == '25') {
                $stoimost = $ob2->november["25"];
            } else if ($tonnazh == '50') {
                $stoimost = $ob2->november["50"];
            } else if ($tonnazh == '75') {
                $stoimost = $ob2->november["75"];
            } else {
                $stoimost = $ob2->november["100"];
            }
        }
    } else {
        $ob3 = new \Zhmih;
        if ($month == 'январь') {
                if ($tonnazh == '25') {
                    $stoimost = $ob3->yanvar["25"];
                } else if ($tonnazh == '50') {
                    $stoimost = $ob3->yanvar["50"];
                } else if ($tonnazh == '75') {
                    $stoimost = $ob3->yanvar["75"];
                } else {
                    $stoimost = $ob3->yanvar["100"];
                }
        } else if ($month == 'февраль') {
            if ($tonnazh == '25') {
                $stoimost = $ob3->fevral["25"];
            } else if ($tonnazh == '50') {
                $stoimost = $ob3->fevral["50"];
            } else if ($tonnazh == '75') {
                $stoimost = $ob3->fevral["75"];
            } else {
                $stoimost = $ob3->fevral["100"];
            }
        } else if ($month == 'август') {
            if ($tonnazh == '25') {
                $stoimost = $ob3->avgust["25"];
            } else if ($tonnazh == '50') {
                $stoimost = $ob3->avgust["50"];
            } else if ($tonnazh == '75') {
                $stoimost = $ob3->avgust["75"];
            } else {
                $stoimost = $ob3->avgust["100"];
            }
        }
        else if ($month == 'сентябрь') {
            if ($tonnazh == '25') {
                $stoimost = $ob3->sentbr["25"];
            } else if ($tonnazh == '50') {
                $stoimost = $ob3->sentbr["50"];
            } else if ($tonnazh == '75') {
                $stoimost = $ob3->sentbr["75"];
            } else {
                $stoimost = $ob3->sentbr["100"];
            }
        }
        else if ($month == 'октябрь') {
            if ($tonnazh == '25') {
                $stoimost = $ob3->octbr["25"];
            } else if ($tonnazh == '50') {
                $stoimost = $ob3->octbr["50"];
            } else if ($tonnazh == '75') {
                $stoimost = $ob3->octbr["75"];
            } else {
                $stoimost = $ob3->octbr["100"];
            }
        } else {
            if ($tonnazh == '25') {
                $stoimost = $ob3->november["25"];
            } else if ($tonnazh == '50') {
                $stoimost = $ob3->november["50"];
            } else if ($tonnazh == '75') {
                $stoimost = $ob3->november["75"];
            } else {
                $stoimost = $ob3->november["100"];
            }
        }
    }
    return $stoimost;
}
    //     public function echoprice($raw_types, $tonnazh, $month, $stoimost) {
    //     if ($raw_types == 'соя') {
    //         $ob = new \Soya();
    //         if ($month == 'январь') {
    //                     $stoimost = $ob->yanvar["$tonnazh"];
    //         } else if ($month == 'февраль') {
    //                 $stoimost = $ob->fevral["$tonnazh"];
    //         } else if ($month == 'август') {
    //                 $stoimost = $ob->avgust["$tonnazh"];
    //         }
    //         else if ($month == 'сентябрь') {
    //                 $stoimost = $ob->sentbr["$tonnazh"];
    //         }
    //         else if ($month == 'октябрь') {
    //                 $stoimost = $ob->octbr["$tonnazh"];
    //         } else {
    //                 $stoimost = $ob->november["$tonnazh"];
    //         }
    //     } else if ($raw_types == 'shrot') {
    //         $ob2 = new \Shrot;
    //         if ($month == 'январь') {
                    
    //                     $stoimost = $ob2->yanvar["$tonnazh"];
                    
    //         } else if ($month == 'февраль') {
                
    //                 $stoimost = $ob2->fevral["$tonnazh"];
                
    //         } else if ($month == 'август') {
                
    //                 $stoimost = $ob2->avgust["$tonnazh"];
                
    //         }
    //         else if ($month == 'сентябрь') {
                
    //                 $stoimost = $ob2->sentbr["$tonnazh"];
               
    //         }
    //         else if ($month == 'октябрь') {
                
    //                 $stoimost = $ob2->octbr["$tonnazh"];
                
    //         } else {
                
    //                 $stoimost = $ob2->november["$tonnazh"];
                
    //         }
    //     } else {
    //         $ob3 = new \Zhmih;
    //         if ($month == 'январь') {
                    
    //                     $stoimost = $ob3->yanvar["$tonnazh"];
                    
    //         } else if ($month == 'февраль') {
                
    //                 $stoimost = $ob3->fevral["$tonnazh"];
                
    //         } else if ($month == 'август') {
               
    //                 $stoimost = $ob3->avgust["$tonnazh"];
                
    //         }
    //         else if ($month == 'сентябрь') {
               
    //                 $stoimost = $ob3->sentbr["$tonnazh"];
                
    //         }
    //         else if ($month == 'октябрь') {
                
    //                 $stoimost = $ob3->octbr["$tonnazh"];
                
    //         } else {
                
    //                 $stoimost = $ob3->november["$tonnazh"];
               
    //         }
    //     }
    //     return $stoimost;
    // }

        // public function price($raw_types, $tonnazh, $month, $stoimost, $prices) {
        //     $stoimost = $prices["$raw_types"]["$month"]["$tonnazh"];
        // }

    }



