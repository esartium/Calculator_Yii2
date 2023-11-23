<?php

use app\models\User;
use app\models\UserIdentity;
use app\controllers\SiteController;
use yii\helpers\Html;

use yii\grid\gridView;
?>

<?php 

echo Html::a('создать нового пользователя', ['add'], ['class' => 'btn btn-success']);

echo GridView::widget([
    'dataProvider' => $dataProvider,
    'columns' => [
        'id',
        'username',
        'email',
        'password',
        'register_date',
        ['class' => 'yii\grid\ActionColumn'] 
    ]
]);
?>
















