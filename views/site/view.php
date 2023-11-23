<?php

use yii\widgets\DetailView;

//просмотр данных конкретного пользователя на отдельной странице

echo DetailView::widget ([
    'model' => $model,
    'attributes' => [
        'id',
        'username',
        'email',
        'password',
    ],
]);
