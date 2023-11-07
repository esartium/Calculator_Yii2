<?php

namespace app\controllers;

use app\models\CalculatorForm;

use app\models\Month;
use app\models\Raw_types;
use app\models\Tonnage;
use app\models\Prices;
use app\models\ApiCalculateForm;
use yii\filters\VerbFilter;
use yii\helpers\ArrayHelper;

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
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;

        $request = (object)json_decode(Yii::$app->request->getRawBody());

        $model = new ApiCalculateForm();

        $model->month = $request->month;
        $model->raw_types = $request->raw_types;
        $model->tonnage = $request->tonnage;

        if ($model->validate() === false) {
            return $model->getErrors();
        }

        return [
            'price' => $model->calculatePrice(),
            'price_list' => [$model->raw_types => $model->generatePriceList()],
        ];
    







        // Yii::$app->response->format = yii\web\Response::FORMAT_JSON;
        // $model = new CalculatorForm();
        // $model = new Prices();
        
        // if ($model->validate(Yii::$app->request->post(), '')) {

            // $r_body = (object)json_decode(Yii::$app->request->getRawBody());

            // $model->month = $r_body->month;
            // $model->raw_types = $r_body->raw_types;
            // $model->tonnage = $r_body->tonnage;

            // $param_tonnage = Yii::$app->request->getBodyParam('tonnage');
            // $param_raw_types = Yii::$app->request->getBodyParam('raw_types');
            // $param_month = Yii::$app->request->getBodyParam('month');

                    // $tonnageID = (new \yii\db\Query())
                    // ->select(['id'])       
                    // ->from('tonnage')
                    // ->where(['like', 'tonnage', $r_body->tonnage])
                    // ->scalar();

                    // $monthID = (new \yii\db\Query())   
                    // ->select(['id'])       
                    // ->from('month')
                    // ->where(['like', 'month', $r_body->month])
                    // ->scalar();

                    // $rawTypesID = (new \yii\db\Query()) 
                    // ->select(['id'])       
                    // ->from('raw_types')
                    // ->where(['like', 'raw_types', $r_body->raw_types])
                    // ->scalar();

                    //     $st = (new \yii\db\Query())   
                    //     ->select(['prices'])       
                    //     ->from('prices')
                    //     ->where(['like', 'tonnage_id', $tonnageID])
                    //     ->andWhere(['like', 'month_id', $monthID])
                    //     ->andWhere(['like', 'raw_types_id', $rawTypesID])
                    //     ->scalar();

                    
                        
            // return 
            // [
            //     "price" => $st,
            //     "price-list" => [
            //         Prices::find()->all(),
                    
            //     ],
            //     ];
        
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