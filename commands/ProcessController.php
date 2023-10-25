<?php

namespace app\commands;
use yii\console\Controller;
use yii\console\ExitCode;
class ProcessController extends Controller {

public function actionQueueResult()
{
    $base_path = __DIR__.'/runtime/queue.job';
     $counter = 0;
     while (true) {
         $counter++;
         echo 'текущая итерация: ' . $counter . PHP_EOL;
         if (file_exists($base_path)) {
             $data = file_get_contents($base_path);
             echo $data;
             unlink($base_path);
         }
         sleep(2);
         return ExitCode::OK;
}
}
}

