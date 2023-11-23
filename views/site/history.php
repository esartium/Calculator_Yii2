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
        'username',
        'tonnage',
        'month',
        'raw_types',
        'price',
        ['class' => 'yii\grid\ActionColumn',
        'template' => '{vieww} {updatee} {deletee}',
            'buttons' => [
                'vieww' => function($url, $model, $key) {
                    return Html::a('vieww', $url);
                },
                'updatee' => function($url, $model, $key) {
                    return Html::a('updatee', $url);
                },
                'deletee' => function($url, $model, $key) {
                    return Html::a('deletee', $url);
                },
            ]
        ]
    ],
]);
?>