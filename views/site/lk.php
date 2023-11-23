
<?php

use app\controllers\RbacController;

if (\Yii::$app->user->can('admin')) {
    echo "admin";

    require_once "../web/navbaradmin.html";
} else if (\Yii::$app->user->can('user')) {
    echo "user";

    require_once "../web/navbaruser.html";
} else {
    echo "guest";

    require_once "../web/navbarguest.html";
}
// echo "username:" . Yii::$app->user->identity->username;

require_once "../web/idx.php";

echo "lk";
?>
