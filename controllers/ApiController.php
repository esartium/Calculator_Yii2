<?php

namespace app\controllers;

use app\models\CalculatorForm;

use app\models\Month;
use app\models\Raw_types;
use app\models\Tonnazh;
use app\models\Zhmih;

use Yii;


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
        Yii::$app->response->format = yii\web\Response::FORMAT_JSON;
        return Zhmih::find()->all();
        if ($type == 'tonnazh') {
            return [tonnazh::$tonnazh]; 
        }
        if ($type == 'month') {
            return [Month::$month];
        }
        if ($type == 'raw_types') {
            return [Raw_types::$raw_types];
        }


}
}

// смотри фотку!!