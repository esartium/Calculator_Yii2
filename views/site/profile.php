<?php
use yii\helpers\Html;

use yii\grid\gridView;

echo Html::a('<- обратно', ['lichniy-cabinet'], ['class' => 'btn btn-primary']);
?>

<p><strong>Профиль</strong></p>

<?php

echo GridView::widget([
    'dataProvider' => $dataProvider,
    'columns' => [
        'id',
        'username',
        'email',
        'password',
        'reqister_date',
        ['class' => 'yii\grid\ActionColumn',
        'template' => '{deleteee}',
            'buttons' => [
                'deleteee' => function($url, $model, $key) {
                    return Html::a('удалить аккаунт', $url);
                },
        ] 
    ]
]
]);

?>