<?php

namespace app\controllers;

use app\models\CalculatorForm;
use app\models\Raschet;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

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

    // public function actionCalculator()
    // {
        
    //     if (empty($_POST) === false) {
    //         $base_path = Yii::getAlias('@runtime') . '/queue.job';
            
    //         if (file_exists($base_path) === true) {
    //                 unlink($base_path);
    //         }
    //         foreach ($_POST['CalculationForm'] as $key => $value) {
    //             file_put_contents($base_path, "$key = $value" . PHP_EOL, FILE_APPEND);
    //         }
    //     }

    //     return $this->render('calculator');
    // }

    public function actionCalculator()
    {
        $model = new CalculatorForm();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            // если валидация пройдена, то открывается штука
            $model->price($model->raw_types, $model->tonnazh, $model->month);
            return $this->render('calculator-confirm', ['model' => $model]);
        } 
            // либо страница отображается первый раз, либо есть ошибка в данных
            return $this->render('calculator', ['model' => $model]);
        
    }



        
} //главная скобка


