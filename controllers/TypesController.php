<?php

namespace app\controllers;

use app\models\Month;
use app\models\Raw_types;
use app\models\Tonnage;
use app\models\ApiCalculateForm;
use yii\filters\VerbFilter;
use yii\helpers\ArrayHelper;

use Yii;


class TypesController extends \yii\rest\Controller
{
    public function actionTypes()
    {
        $types = Raw_types::find()->all();

        foreach($types as &$type) {
            $type = $type->raw_types;
        }

        return $types;
    }
}