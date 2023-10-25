<?php

class ApiController extends \yii\rest\Controller
{
    public function actionClculatePrice() {
        $model = new CalculatorForm();
        if ($model->load(\Yii::$app->request->post(), '')) {
            return [
                "price" => $prices[$form->raw_types][$form->month][$form->tonnazh],
                "price-list" => [
                    $form->raw_types => $prices[$form->raw_types]
                ]
            ]
        }
    }


}

//

if (type == tonnazh) {
    return [tonnazh::$tonnazh] //$tonnazh - массив из модели
}