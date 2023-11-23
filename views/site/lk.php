<?php
use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

if (\Yii::$app->user->can('admin')) {
    // echo "admin";

    require_once "../web/navbaradmin.php";
} else if (\Yii::$app->user->can('user')) {
    // echo "user";

    require_once "../web/navbaruser.php";
} else {
    // echo "guest";

    require_once "../web/navbarguest.html";
}

require_once "../web/idx.php";

echo "lk";
?>
