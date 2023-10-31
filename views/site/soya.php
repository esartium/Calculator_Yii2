<?php
use yii\helpers\Html;
?>



<h1>Soya</h1>
<ul>
<?php foreach ($calcs as $soya): ?> <!-- calc - переменная из контроллера, shrot - название таблицы-->
    <li>
        <?= Html::encode("{$soya->id} ({$soya->январь}) ({$soya->февраль}) ({$soya->август}) ({$soya->сентябрь}) ({$soya->октябрь}) ({$soya->ноябрь})") ?>:
        <?= $soya->тоннаж ?>
    </li>
<?php endforeach; ?>
</ul>