<?php

namespace app\controllers;

use yii\web\Controller;

class NewController extends Controller
{
    public function actionIndex()
    {
        return require_once \Yii::getAlias('@app/web/newindex.html');
    }
}