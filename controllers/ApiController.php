<?php

namespace app\controllers;

use app\models\Month;
use app\models\Raw_types;
use app\models\Tonnage;
use app\models\ApiCalculateForm;
use yii\filters\VerbFilter;
use yii\helpers\ArrayHelper;
use app\models\Calculatehistory;

use Yii;


class ApiController extends \yii\rest\Controller
{
    public function behaviors()
    {
        return ArrayHelper::merge(parent::behaviors(), [
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => [
                    'get-data' => ['get'],
                    'calculate-price' => ['POST'],
                ],
            ],
        ]);
    }

    public function actionCalculatePrice() {
        Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;

        $request = (object)(Yii::$app->request);

        // $request = (object)json_decode(Yii::$app->request->getRawBody());

        $model = new ApiCalculateForm();

        // $model->month = $request->month;
        // $model->raw_types = $request->raw_types;
        // $model->tonnage = $request->tonnage;

        $model->month = $request->getBodyParam('month');
        $model->raw_types = $request->getBodyParam('raw_types');
        $model->tonnage = $request->getBodyParam('tonnage');
    
        if ($model->validate() === false) {
            return $model->getErrors();
        }

        // $table = new Calculatehistory;

        // $table->insert('calculate_history', [
        //     'tonnage' => $model->tonnage,
        //     'month' => $model->month,
        //     'raw_types' => $model->raw_types,
        //     'price' => $model->calculatePrice
        // ]);

        return [
            'price' => $model->calculatePrice(),
            'price_list' => [$model->raw_types => $model->generatePriceList()],
            // 'request' => var_dump($request),
            // 'Yii::$app->request->getRawBody()' => var_dump(Yii::$app->request->getRawBody())
            // 'model-month' => var_dump($model->month),
            // 'model-tonnage' => var_dump($model->tonnage),
            // 'model-raw_types' => var_dump($model->raw_types),
            
        ];
    }

    public string $type;
    public function actionGetData($type) {
        Yii::$app->response->format = yii\web\Response::FORMAT_JSON;
            if ($type == 'tonnage') {
                return Tonnage::find()->all(); 
            }
            if ($type == 'month') {
                return Month::find()->all();
            }
            if ($type == 'raw_types') {
                return Raw_types::find()->all();
            }   
    }
}