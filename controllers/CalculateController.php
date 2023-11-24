<?php

namespace app\controllers;

use app\models\Month;
use app\models\Raw_types;
use app\models\Tonnage;
use app\models\CalculateForm;
use yii\filters\VerbFilter;
use yii\helpers\ArrayHelper;

use Yii;


class CalculateController extends \yii\rest\Controller
{
    public function actionCalculate() {
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;

        // $request = (object)json_decode(Yii::$app->request->getRawBody());

        $request = (object)(Yii::$app->request);

        $model = new CalculateForm();

        // $model->months = $request->months;
        // $model->raw_types = $request->types;
        // $model->tonnages = $request->tonnages;

        $model->months = $request->getBodyParam('months');
        $model->raw_types = $request->getBodyParam('types');
        $model->tonnages = $request->getBodyParam('tonnages');

        if ($model->validate() === false) {
            return $model->getErrors();
        }

        return [
            'price' => $model->calculatePrice(),
            'price_list' => [$model->raw_types => $model->generatePriceList()],
        ];
    }
}