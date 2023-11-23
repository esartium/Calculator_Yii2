<?php

use yii\helpers\Html;
use yii\grid\gridView;
?>

<?php 

echo Html::a('создать новую запись', ['addd'], ['class' => 'btn btn-success']);

echo GridView::widget([
    'dataProvider' => $dataProvider,
    'columns' => [
        'calculation_id',
        'tonnage',
        'month',
        'raw_types',
        'price',
        ['class' => 'yii\grid\ActionColumn',
        'template' => '{vieww} {updatee} {deletee}',
            'buttons' => [
                'vieww' => function($url, $model, $key) {
                    return Html::a('подробнее', $url);
                },
                'updatee' => function($url, $model, $key) {
                    return Html::a('редактировать запись', $url);
                },
                'deletee' => function($url, $model, $key) {
                    return Html::a('удалить запись', $url);
                },
            ]
        ]
    ],
]);
?>