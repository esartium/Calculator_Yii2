<?php

namespace app\controllers;

use app\models\CalculatorForm;

use app\models\Soya;
use app\models\Zhmih;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

use app\models\Shrot;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
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

    /**
     * {@inheritdoc}
     */
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

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionCalculator()
    {
        
        $model = new CalculatorForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $model->price();
            
            if ($model->raw_types == 'шрот') {
                $calc = Shrot::find();
                $calcs = $calc->orderBy('тоннаж')
                ->all();
                $st = Shrot::find()
                ->where(['тоннаж' => $model->tonnazh]);    
                return $this->render('shrot', [
                    'calcs' => $calcs,
                    'model' => $model,
                    'st'=> $st,
                ]);
            } else if ($model->raw_types == 'жмых') {
                $calc = Zhmih::find();
                $calcs = $calc->orderBy('тоннаж')
                ->all();
                $st = (new \yii\db\Query())
                ->select(['январь'])
                ->from('zhmih')
                ->where(['like', 'тоннаж', '25'])
                ->scalar();
                    
                return $this->render('zhmih', [
                    'calcs' => $calcs,
                    'model' => $model,
                    'st'=> $st,
                ]);
            } else if ($model->raw_types == 'соя') {
                $calc = Soya::find();
                $calcs = $calc->orderBy('тоннаж')
                ->all();
                $st = Shrot::find()
                ->where(['тоннаж' => $model->tonnazh]);    
                return $this->render('soya', [
                    'calcs' => $calcs,
                    'model' => $model,
                    'st'=> $st,
                ]);
            }
        } 
            // либо страница отображается первый раз, либо есть ошибка в данных
            return $this->render('calculator', ['model' => $model]);
        
    }

    // public function actionShrot() {
    //     $calc = Shrot::find()->all();

    //     return $this->render('shrot', ['calc'=> $calc]);
    // }



        
} //главная скобка


