<?php

namespace app\controllers;
use app\models\User;

use yii\rest\ActiveController;

class UserController extends \yii\rest\Controller
{
    // public $modelClass = User::class;
    public function actionUser() {
        $user = new User();
        return ["users" => User::find()];
    }
}

