<?php

namespace app\controllers;

use app\models\Month;
use app\models\Raw_types;
use app\models\Tonnage;
use app\models\ApiCalculateForm;
use yii\filters\VerbFilter;
use yii\helpers\ArrayHelper;

use Yii;


class TonnagesController extends \yii\rest\Controller
{
    public function actionTonnages()
    {
        $tonnages = Tonnage::find()->all();

        foreach($tonnages as &$tonnage) {
            $tonnage = $tonnage->tonnage;
        }

        return $tonnages;
    }
}