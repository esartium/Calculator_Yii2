<?php

namespace app\controllers;

use GuzzleHttp\Psr7\Response;
use yii\web\Controller;

class SwaggerUiController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionGetSpec() {
        \Yii::$app->response->format = \yii\web\Response::FORMAT_RAW;
        \Yii::$app->response->headers->set('Content-type', 'application/x-yaml');

        ob_start();

        include_once \Yii::getAlias('@app') . '/swagger/spec.yml';

        return ob_get_clean();
    }
}