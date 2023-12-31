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
        if ($this->raw_types == NULL || $this->tonnazh == NULL || $this->month == NULL) {
            echo "\033[91m выполнение команды завершено с ошибкой" . "\n";
            if ($this->raw_types == NULL) {
                echo "\033[91m необходимо ввести тип сырья" . "\n";
            }
            if ($this->tonnazh == NULL) {
                echo "\033[91m необходимо ввести тоннаж" . "\n";
            }
            if ($this->month == NULL) {
                echo "\033[91m необходимо ввести месяц" . "\n";
            }
        } else if ($this->tonnazh != 25 && $this->tonnazh != 50 && $this->tonnazh != 75 && $this->tonnazh != 100 || $this->raw_types != 'соя' && $this->raw_types != 'жмых' && $this->raw_types != 'шрот' || $this->month != 'январь' && $this->month != 'февраль' && $this->month != 'август' && $this->month != 'сентябрь' && $this->month != 'октябрь' && $this->month != 'ноябрь') {
            echo "\033[91m выполнение команды завершено с ошибкой" . "\n";
            if ($this->tonnazh != 25 && $this->tonnazh != 50 && $this->tonnazh != 75 && $this->tonnazh != 100) {
            echo "\033[91m не найден прайс для значения --tonnazh=" . $this->tonnazh . "\n";
        }
        if ($this->raw_types != 'соя' && $this->raw_types != 'жмых' && $this->raw_types != 'шрот') {
            echo "\033[91m не найден прайс для значения --raw_types=" . $this->raw_types . "\n";
        }
        if ($this->month != 'январь' && $this->month != 'февраль' && $this->month != 'август' && $this->month != 'сентябрь' && $this->month != 'октябрь' && $this->month != 'ноябрь') {
            echo "\033[91m не найден прайс для значения --month=" . $this->month . "\n";
        }
        echo "\033[91m проверьте правильность введенных значений" . "\n";
        } else {
        echo "\033[92m вы ввели: " . "\n";
        echo "\033[93m тип сырья: " . $this->raw_types. "\n";
        echo "\033[93m тоннаж: " . $this->tonnazh . "\n";
        echo "\033[93m месяц: " . $this->month . "\n";
        $prices = \Yii::$app->params['prices'];
        $this->stoimost = $prices[$this->raw_types][$this->month][$this->tonnazh];
        echo "\033[36m => СТОИМОСТЬ: " . $this->stoimost . "\n";
        echo "\033[92m стоимость рассчитана с помощью таблицы: " . "\n";
        if ($this->raw_types == 'шрот') {
                echo '
                +--------+--------+---------+--------+----------+---------+--------+
                | месяц  | январь | февраль | август | сентябрь | октябрь | ноябрь |
                +--------+        |         |        |          |         |        |
                | тоннаж |        |         |        |          |         |        |
                +--------+--------+---------+--------+----------+---------+--------+
                | 25     | 125    | 121     | 137    | 126      | 124     | 128    |
                +--------+--------+---------+--------+----------+---------+--------+
                | 50     | 145    | 118     | 119    | 121      | 122     | 147    |
                +--------+--------+---------+--------+----------+---------+--------+
                | 75     | 136    | 137     | 141    | 137      | 131     | 143    |
                +--------+--------+---------+--------+----------+---------+--------+
                | 100    | 138    | 142     | 117    | 124      | 147     | 112    |
                +--------+--------+---------+--------+----------+---------+--------+
                ';
            } else if ($this->raw_types == 'жмых') {
                echo '
                +--------+--------+---------+--------+----------+---------+--------+
                | месяц  | январь | февраль | август | сентябрь | октябрь | ноябрь |
                +--------+        |         |        |          |         |        |
                | тоннаж |        |         |        |          |         |        |
                +--------+--------+---------+--------+----------+---------+--------+
                | 25     | 121    | 137     | 124    | 137      | 122     | 125    |
                +--------+--------+---------+--------+----------+---------+--------+
                | 50     | 118    | 121     | 145    | 147      | 143     | 145    |
                +--------+--------+---------+--------+----------+---------+--------+
                | 75     | 137    | 124     | 136    | 143      | 112     | 136    |
                +--------+--------+---------+--------+----------+---------+--------+
                | 100    | 142    | 131     | 138    | 112      | 117     | 138    |
                +--------+--------+---------+--------+----------+---------+--------+
                ';
            } else {
                echo '
                +--------+--------+---------+--------+----------+---------+--------+
                | месяц  | январь | февраль | август | сентябрь | октябрь | ноябрь |
                +--------+        |         |        |          |         |        |
                | тоннаж |        |         |        |          |         |        |
                +--------+--------+---------+--------+----------+---------+--------+
                | 25     | 137    | 125     | 124    | 122      | 137     | 121    |
                +--------+--------+---------+--------+----------+---------+--------+
                | 50     | 147    | 145     | 145    | 143      | 119     | 118    |
                +--------+--------+---------+--------+----------+---------+--------+
                | 75     | 112    | 136     | 136    | 112      | 141     | 137    |
                +--------+--------+---------+--------+----------+---------+--------+
                | 100    | 122    | 138     | 138    | 117      | 117     | 142    |
                +--------+--------+---------+--------+----------+---------+--------+
                ';
            }
            return ExitCode::OK; 
        }
        }
        } //главная скобка

