<?php

use app\models\User;
use app\models\UserIdentity;
use app\controllers\SiteController;
?>

<?php
// $rows = User::find()->all();
?>


<table class="table"> 
<tr><th>id</th><th>username</th><th>email</th><th>password</th></tr>
<?php
foreach($rows as $row) {
echo "<tr><td>{$row['id']}</td><td>{$row['username']}</td><td>{$row['email']}</td><td>{$row['password']}</td></tr>";
}
?>
</table>
















