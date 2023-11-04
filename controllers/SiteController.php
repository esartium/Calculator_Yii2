<?php

namespace app\controllers;

use app\models\CalculatorForm;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;

use app\models\Soya;
use app\models\Zhmih;
use app\models\Shrot;
class SiteController extends Controller
{
    
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

   
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionCalculator() {
        
        $model = new CalculatorForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            // $model->price();

                    $tonnageID = (new \yii\db\Query())
                    ->select(['id'])       
                    ->from('tonnage')
                    ->where(['like', 'tonnage', $model->tonnage])
                    ->scalar();

                    $monthID = (new \yii\db\Query())   
                    ->select(['id'])       
                    ->from('month')
                    ->where(['like', 'month', $model->month])
                    ->scalar();

                    $rawTypesID = (new \yii\db\Query()) 
                    ->select(['id'])       
                    ->from('raw_types')
                    ->where(['like', 'raw_types', $model->raw_types])
                    ->scalar();

                        $st = (new \yii\db\Query())   
                        ->select(['prices'])       
                        ->from('prices')
                        ->where(['like', 'tonnage_id', $tonnageID])
                        ->andWhere(['like', 'month_id', $monthID])
                        ->andWhere(['like', 'raw_types_id', $rawTypesID])
                        ->scalar();
             
            return $this->render('calculator-result', [
                'model' => $model,
                'st' => $st,
                'monthID' => $monthID,
                'rawTypesID' => $rawTypesID,
                'tonnageID' => $tonnageID
            ]);

            }

            return $this->render('calculator', ['model' => $model]);
        } 
            
}
    
   

    

        
