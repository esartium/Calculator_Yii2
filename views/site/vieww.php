<?php

use yii\widgets\DetailView;

//просмотр данных конкретного расчёта на отдельной странице

echo DetailView::widget ([
    'model' => $model,
    'attributes' => [
        'calculation_id',
        'tonnage',
        'month',
        'raw_types',
        'price',
    ],
]);
