<?php

namespace app\commands;

use yii\console\Controller;
use yii\console\ExitCode;

class HelloController extends Controller
{
    
    public function actionIndex($message = 'dosvidaniya')
    {
        echo $message . "\n";

        return ExitCode::OK;
    }
}
