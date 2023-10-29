<?php

namespace app\controllers;

use app\models\CalculatorForm;
use app\models\Month;
use app\models\Raw_types;
use app\models\Tonnazh;
use Yii;

// use yii\filters\AccessControl;
// use yii\web\Response;
// use yii\filters\VerbFilter;


class ApiController extends \yii\rest\Controller
{
    public function actionCalculatePrice() {
        // \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        Yii::$app->response->format = yii\web\Response::FORMAT_JSON;
        $model = new CalculatorForm();

        $prices = Yii::$app->params['prices'];
        if ($model->load(Yii::$app->request->post(), '')) {
            return [
                "price" => $prices[$model->raw_types][$model->month][$model->tonnazh],
                "price-list" => [
                    $model->raw_types => $prices[$model->raw_types]
                ],
                ];
        }
    }

    public string $type;
    public function actionGetData($type) {
        // $mass = new Tonnazh();
        Yii::$app->response->format = yii\web\Response::FORMAT_JSON;
        if ($type == 'tonnazh') {
            return [tonnazh::$tonnazh]; 
            //$tonnazh - массив из модели tonnazh
            // return $mass->tonnazh;
        }
        if ($type == 'month') {
            return [Month::$month];
        }
        if ($type == 'raw_types') {
            return [Raw_types::$raw_types];
        }


}
}
