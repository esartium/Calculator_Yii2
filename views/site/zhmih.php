<?php
use yii\helpers\Html;
?>



<h1>Zhmih</h1>
<ul>
<?php foreach ($calcs as $zhmih): ?> <!-- calc - переменная из контроллера, shrot - название таблицы-->
    <li>
        <?= Html::encode("{$zhmih->id} ({$zhmih->январь}) ({$zhmih->февраль}) ({$zhmih->август}) ({$zhmih->сентябрь}) ({$zhmih->октябрь}) ({$zhmih->ноябрь})") ?>:
        <?= $zhmih->тоннаж ?>
    </li>
<?php endforeach; ?>
</ul>