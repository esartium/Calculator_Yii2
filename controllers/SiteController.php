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

    public function actionCalculator()
    {
        
        $model = new CalculatorForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $model->price();
            
            if ($model->raw_types == 'шрот') {
                if ($model->month == 'январь') {
                    switch($model->tonnazh) {
                    case 25: 
                        $st = (new \yii\db\Query())   //поменять этот ужас на переменные
                        ->select([$model->month])       //как тут
                        ->from('shrot')
                        ->where(['like', 'тоннаж', '25'])
                        ->scalar();
                        break;
                    case 50:
                        $st = (new \yii\db\Query())
                        ->select(['январь'])
                        ->from('shrot')
                        ->where(['like', 'тоннаж', '50'])
                        ->scalar();
                        break;
                    case 75:
                        $st = (new \yii\db\Query())
                        ->select(['январь'])
                        ->from('shrot')
                        ->where(['like', 'тоннаж', '75'])
                        ->scalar();
                        break;
                    case 100:
                        $st = (new \yii\db\Query())
                        ->select(['январь'])
                        ->from('shrot')
                        ->where(['like', 'тоннаж', '100'])
                        ->scalar();
                        break;
                    }
                } else if ($model->month == 'февраль') {
                    switch($model->tonnazh) {
                        case 25: 
                            $st = (new \yii\db\Query())
                            ->select(['февраль'])
                            ->from('shrot')
                            ->where(['like', 'тоннаж', '25'])
                            ->scalar();
                            break;
                        case 50:
                            $st = (new \yii\db\Query())
                            ->select(['февраль'])
                            ->from('shrot')
                            ->where(['like', 'тоннаж', '50'])
                            ->scalar();
                            break;
                        case 75:
                            $st = (new \yii\db\Query())
                            ->select(['февраль'])
                            ->from('shrot')
                            ->where(['like', 'тоннаж', '75'])
                            ->scalar();
                            break;
                        case 100:
                            $st = (new \yii\db\Query())
                            ->select(['февраль'])
                            ->from('shrot')
                            ->where(['like', 'тоннаж', '100'])
                            ->scalar();
                            break;
                        }
                } else if ($model->month == 'август') {
                    switch($model->tonnazh) {
                        case 25: 
                            $st = (new \yii\db\Query())
                            ->select(['август'])
                            ->from('shrot')
                            ->where(['like', 'тоннаж', '25'])
                            ->scalar();
                            break;
                        case 50:
                            $st = (new \yii\db\Query())
                            ->select(['август'])
                            ->from('shrot')
                            ->where(['like', 'тоннаж', '50'])
                            ->scalar();
                            break;
                        case 75:
                            $st = (new \yii\db\Query())
                            ->select(['август'])
                            ->from('shrot')
                            ->where(['like', 'тоннаж', '75'])
                            ->scalar();
                            break;
                        case 100:
                            $st = (new \yii\db\Query())
                            ->select(['август'])
                            ->from('shrot')
                            ->where(['like', 'тоннаж', '100'])
                            ->scalar();
                            break;
                        }
                } else if ($model->month == 'сентябрь') {
                    switch($model->tonnazh) { 
                        case 25: 
                            $st = (new \yii\db\Query())
                            ->select(['сентябрь'])
                            ->from('shrot')
                            ->where(['like', 'тоннаж', '25'])
                            ->scalar();
                            break;
                        case 50:
                            $st = (new \yii\db\Query())
                            ->select(['сентябрь'])
                            ->from('shrot')
                            ->where(['like', 'тоннаж', '50'])
                            ->scalar();
                            break;
                        case 75:
                            $st = (new \yii\db\Query())
                            ->select(['сентябрь'])
                            ->from('shrot')
                            ->where(['like', 'тоннаж', '75'])
                            ->scalar();
                            break;
                        case 100:
                            $st = (new \yii\db\Query())
                            ->select(['сентябрь'])
                            ->from('shrot')
                            ->where(['like', 'тоннаж', '100'])
                            ->scalar();
                            break;
                        }
                } else if ($model->month == 'октябрь') {
                    switch($model->tonnazh) {
                        case 25: 
                            $st = (new \yii\db\Query())
                            ->select(['октябрь'])
                            ->from('shrot')
                            ->where(['like', 'тоннаж', '25'])
                            ->scalar();
                            break;
                        case 50:
                            $st = (new \yii\db\Query())
                            ->select(['октябрь'])
                            ->from('shrot')
                            ->where(['like', 'тоннаж', '50'])
                            ->scalar();
                            break;
                        case 75:
                            $st = (new \yii\db\Query())
                            ->select(['октябрь'])
                            ->from('shrot')
                            ->where(['like', 'тоннаж', '75'])
                            ->scalar();
                            break;
                        case 100:
                            $st = (new \yii\db\Query())
                            ->select(['октябрь'])
                            ->from('shrot')
                            ->where(['like', 'тоннаж', '100'])
                            ->scalar();
                            break;
                        }
                } else if ($model->month == 'ноябрь') {
                    switch($model->tonnazh) {
                        case 25: 
                            $st = (new \yii\db\Query())
                            ->select(['ноябрь'])
                            ->from('shrot')
                            ->where(['like', 'тоннаж', '25'])
                            ->scalar();
                            break;
                        case 50:
                            $st = (new \yii\db\Query())
                            ->select(['ноябрь'])
                            ->from('shrot')
                            ->where(['like', 'тоннаж', '50'])
                            ->scalar();
                            break;
                        case 75:
                            $st = (new \yii\db\Query())
                            ->select(['ноябрь'])
                            ->from('shrot')
                            ->where(['like', 'тоннаж', '75'])
                            ->scalar();
                            break;
                        case 100:
                            $st = (new \yii\db\Query())
                            ->select(['ноябрь'])
                            ->from('shrot')
                            ->where(['like', 'тоннаж', '100'])
                            ->scalar();
                            break;
                        }
                    }    
                return $this->render('shrot', [
                    'model' => $model,
                    'st'=> $st,
                ]);
            } else if ($model->raw_types == 'жмых') {
                if ($model->month == 'январь') {
                    switch($model->tonnazh) {
                    case 25: 
                        $st = (new \yii\db\Query())
                        ->select(['январь'])
                        ->from('zhmih')
                        ->where(['like', 'тоннаж', '25'])
                        ->scalar();
                        break;
                    case 50:
                        $st = (new \yii\db\Query())
                        ->select(['январь'])
                        ->from('zhmih')
                        ->where(['like', 'тоннаж', '50'])
                        ->scalar();
                        break;
                    case 75:
                        $st = (new \yii\db\Query())
                        ->select(['январь'])
                        ->from('zhmih')
                        ->where(['like', 'тоннаж', '75'])
                        ->scalar();
                        break;
                    case 100:
                        $st = (new \yii\db\Query())
                        ->select(['январь'])
                        ->from('zhmih')
                        ->where(['like', 'тоннаж', '100'])
                        ->scalar();
                        break;
                    }
                } else if ($model->month == 'февраль') {
                    switch($model->tonnazh) {
                        case 25: 
                            $st = (new \yii\db\Query())
                            ->select(['февраль'])
                            ->from('zhmih')
                            ->where(['like', 'тоннаж', '25'])
                            ->scalar();
                            break;
                        case 50:
                            $st = (new \yii\db\Query())
                            ->select(['февраль'])
                            ->from('zhmih')
                            ->where(['like', 'тоннаж', '50'])
                            ->scalar();
                            break;
                        case 75:
                            $st = (new \yii\db\Query())
                            ->select(['февраль'])
                            ->from('zhmih')
                            ->where(['like', 'тоннаж', '75'])
                            ->scalar();
                            break;
                        case 100:
                            $st = (new \yii\db\Query())
                            ->select(['февраль'])
                            ->from('zhmih')
                            ->where(['like', 'тоннаж', '100'])
                            ->scalar();
                            break;
                        }
                } else if ($model->month == 'август') {
                    switch($model->tonnazh) {
                        case 25: 
                            $st = (new \yii\db\Query())
                            ->select(['август'])
                            ->from('zhmih')
                            ->where(['like', 'тоннаж', '25'])
                            ->scalar();
                            break;
                        case 50:
                            $st = (new \yii\db\Query())
                            ->select(['август'])
                            ->from('zhmih')
                            ->where(['like', 'тоннаж', '50'])
                            ->scalar();
                            break;
                        case 75:
                            $st = (new \yii\db\Query())
                            ->select(['август'])
                            ->from('zhmih')
                            ->where(['like', 'тоннаж', '75'])
                            ->scalar();
                            break;
                        case 100:
                            $st = (new \yii\db\Query())
                            ->select(['август'])
                            ->from('zhmih')
                            ->where(['like', 'тоннаж', '100'])
                            ->scalar();
                            break;
                        }
                } else if ($model->month == 'сентябрь') {
                    switch($model->tonnazh) { 
                        case 25: 
                            $st = (new \yii\db\Query())
                            ->select(['сентябрь'])
                            ->from('zhmih')
                            ->where(['like', 'тоннаж', '25'])
                            ->scalar();
                            break;
                        case 50:
                            $st = (new \yii\db\Query())
                            ->select(['сентябрь'])
                            ->from('zhmih')
                            ->where(['like', 'тоннаж', '50'])
                            ->scalar();
                            break;
                        case 75:
                            $st = (new \yii\db\Query())
                            ->select(['сентябрь'])
                            ->from('zhmih')
                            ->where(['like', 'тоннаж', '75'])
                            ->scalar();
                            break;
                        case 100:
                            $st = (new \yii\db\Query())
                            ->select(['сентябрь'])
                            ->from('zhmih')
                            ->where(['like', 'тоннаж', '100'])
                            ->scalar();
                            break;
                        }
                } else if ($model->month == 'октябрь') {
                    switch($model->tonnazh) {
                        case 25: 
                            $st = (new \yii\db\Query())
                            ->select(['октябрь'])
                            ->from('zhmih')
                            ->where(['like', 'тоннаж', '25'])
                            ->scalar();
                            break;
                        case 50:
                            $st = (new \yii\db\Query())
                            ->select(['октябрь'])
                            ->from('zhmih')
                            ->where(['like', 'тоннаж', '50'])
                            ->scalar();
                            break;
                        case 75:
                            $st = (new \yii\db\Query())
                            ->select(['октябрь'])
                            ->from('zhmih')
                            ->where(['like', 'тоннаж', '75'])
                            ->scalar();
                            break;
                        case 100:
                            $st = (new \yii\db\Query())
                            ->select(['октябрь'])
                            ->from('zhmih')
                            ->where(['like', 'тоннаж', '100'])
                            ->scalar();
                            break;
                        }
                } else if ($model->month == 'ноябрь') {
                    switch($model->tonnazh) {
                        case 25: 
                            $st = (new \yii\db\Query())
                            ->select(['ноябрь'])
                            ->from('zhmih')
                            ->where(['like', 'тоннаж', '25'])
                            ->scalar();
                            break;
                        case 50:
                            $st = (new \yii\db\Query())
                            ->select(['ноябрь'])
                            ->from('zhmih')
                            ->where(['like', 'тоннаж', '50'])
                            ->scalar();
                            break;
                        case 75:
                            $st = (new \yii\db\Query())
                            ->select(['ноябрь'])
                            ->from('zhmih')
                            ->where(['like', 'тоннаж', '75'])
                            ->scalar();
                            break;
                        case 100:
                            $st = (new \yii\db\Query())
                            ->select(['ноябрь'])
                            ->from('zhmih')
                            ->where(['like', 'тоннаж', '100'])
                            ->scalar();
                            break;
                        }
                }
                return $this->render('zhmih', [
                    'model' => $model,
                    'st'=> $st,
                ]);
            } else if ($model->raw_types == 'соя') {
                if ($model->month == 'январь') {
                    switch($model->tonnazh) {
                    case 25: 
                        $st = (new \yii\db\Query())
                        ->select(['январь'])
                        ->from('soya')
                        ->where(['like', 'тоннаж', '25'])
                        ->scalar();
                        break;
                    case 50:
                        $st = (new \yii\db\Query())
                        ->select(['январь'])
                        ->from('soya')
                        ->where(['like', 'тоннаж', '50'])
                        ->scalar();
                        break;
                    case 75:
                        $st = (new \yii\db\Query())
                        ->select(['январь'])
                        ->from('soya')
                        ->where(['like', 'тоннаж', '75'])
                        ->scalar();
                        break;
                    case 100:
                        $st = (new \yii\db\Query())
                        ->select(['январь'])
                        ->from('soya')
                        ->where(['like', 'тоннаж', '100'])
                        ->scalar();
                        break;
                    }
                } else if ($model->month == 'февраль') {
                    switch($model->tonnazh) {
                        case 25: 
                            $st = (new \yii\db\Query())
                            ->select(['февраль'])
                            ->from('soya')
                            ->where(['like', 'тоннаж', '25'])
                            ->scalar();
                            break;
                        case 50:
                            $st = (new \yii\db\Query())
                            ->select(['февраль'])
                            ->from('soya')
                            ->where(['like', 'тоннаж', '50'])
                            ->scalar();
                            break;
                        case 75:
                            $st = (new \yii\db\Query())
                            ->select(['февраль'])
                            ->from('soya')
                            ->where(['like', 'тоннаж', '75'])
                            ->scalar();
                            break;
                        case 100:
                            $st = (new \yii\db\Query())
                            ->select(['февраль'])
                            ->from('soya')
                            ->where(['like', 'тоннаж', '100'])
                            ->scalar();
                            break;
                        }
                } else if ($model->month == 'август') {
                    switch($model->tonnazh) {
                        case 25: 
                            $st = (new \yii\db\Query())
                            ->select(['август'])
                            ->from('soya')
                            ->where(['like', 'тоннаж', '25'])
                            ->scalar();
                            break;
                        case 50:
                            $st = (new \yii\db\Query())
                            ->select(['август'])
                            ->from('soya')
                            ->where(['like', 'тоннаж', '50'])
                            ->scalar();
                            break;
                        case 75:
                            $st = (new \yii\db\Query())
                            ->select(['август'])
                            ->from('soya')
                            ->where(['like', 'тоннаж', '75'])
                            ->scalar();
                            break;
                        case 100:
                            $st = (new \yii\db\Query())
                            ->select(['август'])
                            ->from('soya')
                            ->where(['like', 'тоннаж', '100'])
                            ->scalar();
                            break;
                        }
                } else if ($model->month == 'сентябрь') {
                    switch($model->tonnazh) { 
                        case 25: 
                            $st = (new \yii\db\Query())
                            ->select(['сентябрь'])
                            ->from('soya')
                            ->where(['like', 'тоннаж', '25'])
                            ->scalar();
                            break;
                        case 50:
                            $st = (new \yii\db\Query())
                            ->select(['сентябрь'])
                            ->from('soya')
                            ->where(['like', 'тоннаж', '50'])
                            ->scalar();
                            break;
                        case 75:
                            $st = (new \yii\db\Query())
                            ->select(['сентябрь'])
                            ->from('soya')
                            ->where(['like', 'тоннаж', '75'])
                            ->scalar();
                            break;
                        case 100:
                            $st = (new \yii\db\Query())
                            ->select(['сентябрь'])
                            ->from('soya')
                            ->where(['like', 'тоннаж', '100'])
                            ->scalar();
                            break;
                        }
                } else if ($model->month == 'октябрь') {
                    switch($model->tonnazh) {
                        case 25: 
                            $st = (new \yii\db\Query())
                            ->select(['октябрь'])
                            ->from('soya')
                            ->where(['like', 'тоннаж', '25'])
                            ->scalar();
                            break;
                        case 50:
                            $st = (new \yii\db\Query())
                            ->select(['октябрь'])
                            ->from('soya')
                            ->where(['like', 'тоннаж', '50'])
                            ->scalar();
                            break;
                        case 75:
                            $st = (new \yii\db\Query())
                            ->select(['октябрь'])
                            ->from('soya')
                            ->where(['like', 'тоннаж', '75'])
                            ->scalar();
                            break;
                        case 100:
                            $st = (new \yii\db\Query())
                            ->select(['октябрь'])
                            ->from('soya')
                            ->where(['like', 'тоннаж', '100'])
                            ->scalar();
                            break;
                        }
                } else if ($model->month == 'ноябрь') {
                    switch($model->tonnazh) {
                        case 25: 
                            $st = (new \yii\db\Query())
                            ->select(['ноябрь'])
                            ->from('soya')
                            ->where(['like', 'тоннаж', '25'])
                            ->scalar();
                            break;
                        case 50:
                            $st = (new \yii\db\Query())
                            ->select(['ноябрь'])
                            ->from('soya')
                            ->where(['like', 'тоннаж', '50'])
                            ->scalar();
                            break;
                        case 75:
                            $st = (new \yii\db\Query())
                            ->select(['ноябрь'])
                            ->from('soya')
                            ->where(['like', 'тоннаж', '75'])
                            ->scalar();
                            break;
                        case 100:
                            $st = (new \yii\db\Query())
                            ->select(['ноябрь'])
                            ->from('soya')
                            ->where(['like', 'тоннаж', '100'])
                            ->scalar();
                            break;
                        }
                
                    }
            return $this->render('soya', [
                'model' => $model,
                'st'=> $st,
            ]);
        } 
            
        
    }
    return $this->render('calculator', ['model' => $model]);
    
    }
}
        
