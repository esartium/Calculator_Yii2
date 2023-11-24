<?php
use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

if (\Yii::$app->user->identity->username == 'guest'){
    // echo "guest";

    require_once "../web/navbarguest.html";
} else if (\Yii::$app->user->can('admin')) {
    // echo "admin";

    require_once "../web/navbaradmin.php";
} else if (\Yii::$app->user->can('user')) {
    // echo "user";

    require_once "../web/navbaruser.php";
} 

require_once "../web/idx.php";
?>

<!-- <div class="alert alert-success alert-dismissible fade show" role="alert">
    Здравствуйте, 
    // Yii::$app->user->identity->username 
    , вы авторизовались в системе расчета стоимости доставки. Теперь все ваши расчеты будут сохранены для последующего просмотра в журнале расчётов
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
</div> -->

