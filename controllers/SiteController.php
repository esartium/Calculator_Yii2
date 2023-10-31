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
                // $calc = Shrot::find();
                // $calcs = $calc->orderBy('тоннаж')
                // ->all();
                // $st = Shrot::find()
                // ->where(['тоннаж' => $model->tonnazh]);
                if ($model->month == 'январь') {
                    switch($model->tonnazh) {
                    case 25: 
                        $st = (new \yii\db\Query())
                        ->select(['январь'])
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
                    // 'calcs' => $calcs,
                    'model' => $model,
                    'st'=> $st,
                ]);
            } else if ($model->raw_types == 'жмых') { //иф елс скобка
                // $calc = Zhmih::find();
                // $calcs = $calc->orderBy('тоннаж')
                // ->all();
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
                    // 'calcs' => $calcs,
                    'model' => $model,
                    'st'=> $st,
                ]);
            } else if ($model->raw_types == 'соя') {
                // $calc = Soya::find();
                // $calcs = $calc->orderBy('тоннаж')
                // ->all();
                // $st = Shrot::find()
                // ->where(['тоннаж' => $model->tonnazh]); 
                
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
                // 'calcs' => $calcs,
                'model' => $model,
                'st'=> $st,
            ]);
        } 
            
        
    }
    // либо страница отображается первый раз, либо есть ошибка в данных
    return $this->render('calculator', ['model' => $model]);

    // public function actionShrot() {
    //     $calc = Shrot::find()->all();

    //     return $this->render('shrot', ['calc'=> $calc]);
    // }


    }
}
        
