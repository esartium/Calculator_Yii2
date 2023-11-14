<?php

namespace app\controllers;

use app\models\Month;
use app\models\Raw_types;
use app\models\Tonnage;
use app\models\ApiCalculateForm;
use yii\filters\VerbFilter;
use yii\helpers\ArrayHelper;

use Yii;


class MonthsController extends \yii\rest\Controller
{
    public function actionMonths()
    {
        $months = Month::find()->all();

        foreach($months as &$month) {
            $month = $month->month;
        }

        return $months;
    }
}