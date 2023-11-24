<?php

use app\models\User;
use app\models\UserIdentity;
use app\controllers\SiteController;
use yii\helpers\Html;

use yii\grid\gridView;
?>

<?php 

echo Html::a('<- обратно', ['lichniy-cabinet'], ['class' => 'btn btn-primary']);

echo Html::a('Создать нового пользователя', ['add'], ['class' => 'btn btn-primary']);

echo GridView::widget([
    'dataProvider' => $dataProvider,
    'columns' => [
        'id',
        'username',
        'email',
        'password',
        'reqister_date',
        ['class' => 'yii\grid\ActionColumn'] 
    ]
]);
?>
















