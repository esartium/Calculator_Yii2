<?php

namespace app\controllers;

use app\models\CalculatorForm;
use Yii;

use yii\data\ActiveDataProvider;

use yii\filters\AccessControl;

use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\SignupForm;
use app\models\User;

use app\models\History;

use app\models\Soya;
use app\models\Zhmih;
use app\models\Shrot;
class SiteController extends Controller
{  
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
        public function behaviors()
        {
            return [
                'access' => [
                    'class' => AccessControl::class,
                    'only' => ['login', 'logout', 'users-list'],
                    'rules' => [
                        // [
                        //     'actions' => ['idx'],
                        //     'allow' => true,
                        //     'roles' => [''],
                        // ],
                        // [
                        //     'actions' => ['lichniy-cabinet'],
                        //     'allow' => true,
                        //     'roles' => ['*'],
                        // ],
                        [
                            'actions' => ['logout'],
                            'allow' => true,
                            'roles' => ['@'],
                        ],
                        [
                            'actions' => ['login'],
                            'allow' => true,
                            'roles' => ['?'],
                        ],
                        [
                            'actions' => ['users-list'],
                            'allow' => true,
                            'roles' => ['admin'],
                        ],
                        
                    ],
                ],
                'verbs' => [
                    'class' => VerbFilter::class,
                    // 'actions' => [
                    //     'logout' => ['post'],
                    // ],
                ],
            ];
        }
    
        public function actionLogin()
        {
            if (!Yii::$app->user->isGuest) {
                return $this->render('login');
            }
    
            $model = new LoginForm();
            if ($model->load(Yii::$app->request->post()) && $model->login()) {
                return $this->render('lk', ['model' => $model]);
            }
    
            $model->password = '';
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    
        public function actionLogout()
        {
            Yii::$app->user->logout();
    
            // return require_once \Yii::getAlias('@app/web/../views/site/login.php');
            $model = new LoginForm();
            return $this->render('login', [
                'model' => $model,
            ]);
        }

        public function actionSignup() {
            $model = new SignupForm();

            if(Yii::$app->request->isPost) {
                $model->load(Yii::$app->request->post());
                
                if ($model->signup()) {
                    return $this->redirect('login');
                }
            }

            return $this->render('signup', [
                'model' => $model,
            ]);
        }
    
        public function actionIdx()
        {
            return require_once Yii::getAlias('@app/web/idx.php');
        }
    
        public function actionLichniyCabinet() {
            return $this->render('lk');
        }

        public function actionUsersList() { //страничка с пользователями для админа
            $dataProvider = new ActiveDataProvider([
                'query' => User::find(),
                'pagination' => [
                    'pageSize' => 8,
                ]
                ]);

            return $this->render('userslist', ['dataProvider' => $dataProvider]);
        }
        public function actionProfile() { 
            $dataProvider = new ActiveDataProvider([
                'query' => User::find()->select(['id', 'username', 'email', 'password', 'reqister_date'])->from('user')->where(['like', 'id', Yii::$app->user->identity->id]),
                'pagination' => [
                    'pageSize' => 8,
                ]
                ]);

            return $this->render('profile', ['dataProvider' => $dataProvider]);
        }
        public function actionView($id) { //просмотр данных конкретного пользователя на отдельной странице (для админа)
            $model = User::findOne($id);
            
            return $this->render('view', ['model' => $model]);
        }
        public function actionUpdate($id) { //редактирование записи о пользователе (для админа)
            // как работает сохранение внесённых изменений: нужно сделать проверку, есть ли передаваемый данные, потом загрузить их в модель и вызвать для модели метод сохранения

            $model = User::findOne($id);

            if($model->load(Yii::$app->request->post())) { // Yii::$app->request->post() - это мы получаем из объекта, полученного из пост-запроса то, что было введено в форму; здесь мы проверяем, получили ли мы их
                $model->save();
                return $this->redirect(['view', 'id' => $model->id]);
            } 

            return $this->render('edit', ['model' => $model]);
        }
        public function actionAdd() {
            $model = new User();

            if($model->load(Yii::$app->request->post())) { // Yii::$app->request->post() - это мы получаем из объекта, полученного из пост-запроса то, что было введено в форму; здесь мы проверяем, получили ли мы их
                $model->save();
                return $this->redirect(['users-list', 'id' => $model->id]);
            } 

            return $this->render('edit', ['model' => $model]);
        }
        public function actionDelete($id) {
            $model = User::findOne($id);

            if($model) {
                $model->delete();

                return $this->redirect(['users-list']);
            }
        } 
        public function actionDeleteee($id) {
            $model = User::findOne($id);

            if($model) {
                $model->delete();

                return $this->redirect(['profile']);
            }
        } 

        public function actionHistory() { //страничка с пользователями для админа
            $dataProvider = new ActiveDataProvider([
                'query' => History::find(),
                'pagination' => [
                    'pageSize' => 8,
                ]
            ]);

            return $this->render('history', ['dataProvider' => $dataProvider]);
        }
        public function actionHistoryy() { //страничка с пользователями для user
            $dataProvider = new ActiveDataProvider([
                'query' => History::find()->select(['calculation_id', 'month', 'raw_types', 'tonnage', 'price'])->from('history')->where(['like', 'username', Yii::$app->user->identity->username]),
                'pagination' => [
                    'pageSize' => 8,
                ]
                ]);

            return $this->render('historyy', ['dataProvider' => $dataProvider]);
        }
        public function actionVieww($id) { //просмотр данных конкретного пользователя на отдельной странице (для админа)
            $model = History::findOne($id);
            
            return $this->render('vieww', ['model' => $model]);
        }
        public function actionUpdatee($id) { //редактирование записи о пользователе (для админа)
            // как работает сохранение внесённых изменений: нужно сделать проверку, есть ли передаваемый данные, потом загрузить их в модель и вызвать для модели метод сохранения

            $model = History::findOne($id);

            if($model->load(Yii::$app->request->post())) { // Yii::$app->request->post() - это мы получаем из объекта, полученного из пост-запроса то, что было введено в форму; здесь мы проверяем, получили ли мы их
                $model->save();
                return $this->redirect(['vieww', 'id' => $model->id]);
            } 

            return $this->render('editt', ['model' => $model]);
        }
        public function actionAddd() {
            $model = new History();

            if($model->load(Yii::$app->request->post())) { // Yii::$app->request->post() - это мы получаем из объекта, полученного из пост-запроса то, что было введено в форму; здесь мы проверяем, получили ли мы их
                $model->save();
                return $this->redirect(['history', 'id' => $model->id]);
            } 

            return $this->render('editt', ['model' => $model]);
        }
        public function actionDeletee($id) {
            $model = History::findOne($id);

            if($model) {
                $model->delete();

                return $this->redirect(['history']);
            }
        } 

        


}
    
   

    

        
