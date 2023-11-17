<?php

namespace app\controllers;

use yii\web\Controller;

class NewController extends Controller
{
    public function actionIdx()
    {
        return require_once \Yii::getAlias('@app/web/idx.html');
    }
}